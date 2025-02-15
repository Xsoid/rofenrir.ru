<?php

namespace app\controllers;

use app\models\GameAccount;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use app\models\SignupForm;
use app\models\User;
use yii\helpers\Markdown;

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
                'only' => ['logout', 'profile', 'account', 'create-account', 'confirm-email', 'send-confirm-email'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'profile', 'account', 'create-account', 'confirm-email', 'send-confirm-email'],
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    private function setLoginGoBackData($returnUrl) {
        if ($returnUrl) {
            Yii::$app->session->set('external_return_url', $returnUrl);
        }
    }

    private function getLoginGoBackData() {
        $returnUrl = Yii::$app->session->get('external_return_url');
        return [$returnUrl];
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        list($returnUrl) = $this->getLoginGoBackData();

        Yii::$app->user->logout();

        $this->setLoginGoBackData($returnUrl);

        return $this->redirect(['login']);
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
        $user->scenario = User::SCENARIO_PROFILE;
        if ($user->load(Yii::$app->request->post()) && $user->save()) {

        }
        $emailContacts = $user->getContacts()->andWhere(['type' => UserContact::TYPE_EMAIL])->all();

        return $this->render('profile', [
            'model' => $user,
            'emailContacts' => $emailContacts,
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
