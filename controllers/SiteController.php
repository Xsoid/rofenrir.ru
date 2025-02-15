<?php

namespace app\controllers;

use app\models\GameAccount;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

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
                'only' => ['logout', 'profile', 'account', 'create-account'],
                'rules' => [
                    [
                        'actions' => ['logout', 'profile', 'account', 'create-account'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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
        Yii::$app->user->logout();

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
