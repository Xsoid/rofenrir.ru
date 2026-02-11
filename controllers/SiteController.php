<?php

namespace app\controllers;

use app\models\GameAccount;
use app\models\Char;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'profile', 'account', 'create-account', 'move-char'],
                'rules' => [
                    [
                        'actions' => ['logout', 'profile', 'account', 'create-account', 'move-char'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    'move-char' => ['post'],
                    'logout-finalize' => ['get'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'pages' => [
                'class' => 'yii\web\ViewAction'
            ],
            'markdown' => [
                'class' => 'app\ext\MarkdownAction',
                'viewPrefix' => 'markdown'
            ],
            'login' => [
                'class' => 'share\actions\LoginRpgidAction',
                'redirectUrl' => ['index'],
            ],
            'robots' => [
                'class' => 'share\actions\SettingsValueAsFile',
                'settingsCode' => 'SiteRobots',
                'contentType' => 'text/plain',
            ],
        ];
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionLogout()
    {
        $request = Yii::$app->request;
        $logoutRpgid = (string) $request->post('logout_rpgid', '0') === '1';
        if ($logoutRpgid) {
            $authDomain = Yii::$app->params['authDomain'] ?? Yii::$app->params['authLocal'] ?? '';
            if (!empty($authDomain)) {
                $returnUrl = \yii\helpers\Url::to(['/site/logout-finalize'], true);
                $logoutUrl = rtrim((string) $authDomain, '/') . '/user/logout?' . http_build_query([
                    'return_url' => $returnUrl,
                ]);
                return $this->redirect($logoutUrl);
            }
        }

        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionLogoutFinalize()
    {
        if (!Yii::$app->user->isGuest) {
            Yii::$app->user->logout();
        }

        return $this->goHome();
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionProfile()
    {
        $user = Yii::$app->user->identity;
        return $this->render('profile', [
            'model' => $user,
        ]);
    }

    public function actionAccount($id)
    {
        $model = $this->findAccount($id);
        $user = Yii::$app->user->identity;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->new_user_pass) {
                $model->changePassword($model->new_user_pass);
            }
        }

        return $this->render('account', [
            'model' => $model,
            'user' => $user,
        ]);
    }

    public function actionCreateAccount()
    {
        $model = new GameAccount();
        $model->sex = 'M';
        $model->birthdate = date('Y-n-d');
        $user = Yii::$app->user->identity;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['profile']);
        }

        return $this->render('create-account', [
            'model' => $model,
            'user' => $user,
        ]);
    }

    public function actionMoveChar($id)
    {
        $char = Char::findOne((int)$id);
        if (!$char) {
            throw new NotFoundHttpException('Персонаж не найден.');
        }

        $user = Yii::$app->user->identity;
        if (!$user->getGameAccount($char->account_id)) {
            throw new ForbiddenHttpException('Нет доступа к этому персонажу.');
        }

        if ($char->online) {
            Yii::$app->session->setFlash('danger', 'Персонаж сейчас в игре. Выйдите, чтобы перенести его на точку сохранения.');
            return $this->redirect(['account', 'id' => $char->account_id]);
        }

        $char->last_map = $char->save_map;
        $char->last_x = $char->save_x;
        $char->last_y = $char->save_y;
        $char->save(false, ['last_map', 'last_x', 'last_y']);

        Yii::$app->session->setFlash('success', 'Персонаж перенесен на точку сохранения.');
        return $this->redirect(['account', 'id' => $char->account_id]);
    }

    /**
     * @param $id
     * @return GameAccount
     */
    protected function findAccount($id)
    {
        $user = Yii::$app->user->identity;
        if (($model = $user->getGameAccount($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Такой страницы не существует.');
        }
    }
}
