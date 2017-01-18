<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use yii\helpers\Console;
use app\models\User;

/**
 * This is the commands for creating users.
 *
 * You can use this command to add users, admins.
 *
 * ```
 * $ ./yii user/add --email=test@example.com --password=test
 * $ ./yii user/add -e=test@example.com -p=test
 * $ ./yii user/add-admin --email=test@example.com --password=test
 * $ ./yii user/add-admin -e=test@example.com -p=test
 * ```
 *
 */
class UserController extends Controller {

    const EXIT_CODE_EMPTY_USERNAME = 2;
    const EXIT_CODE_EMPTY_PASSWORD = 3;
    const EXIT_CODE_EMPTY_EMAIL = 4;
    const EXIT_CODE_USER_VALIDATE_ERROR = 5;

    public $password;
    public $email;


    private function checkArgs(){
        if (($this->email === true) || empty($this->email)) {
            $this->stdout(Yii::t('console', 'Email is empty.')."\n", Console::FG_RED);
            return self::EXIT_CODE_EMPTY_EMAIL;
        }
        if (($this->password === true) || empty($this->password)) {
            $this->stdout(Yii::t('console', 'Password is empty.')."\n", Console::FG_RED);
            return self::EXIT_CODE_EMPTY_PASSWORD;
        }
        return false;
    }
    
    private function add($group=User::GROUP_DEFAULT){
        $u = new User;
        $u->password = $this->password;
        $u->email = $this->email;
        $u->group = $group;

        if (!$u->save()) {
            $errors = implode("\n", $u->errors);
            $this->stdout("User validate error:\n{$errors}\n", Console::FG_RED);
            return self::EXIT_CODE_USER_VALIDATE_ERROR;    
        }
        return $u;
    }

    public function actionIndex()
    {
        $this->run('/help', ['user']);
    }

    /**
     * This is the commands for creating users.
     *
     * ```
     * $ ./yii user/add --email=test@example.com --password=test
     * $ ./yii user/add -e=test@example.com -p=test
     * ```
     *
     */
    public function actionAdd() {
        $check = $this->checkArgs();
        if ($check !== false) {
            return $check;
        }
        unset($check);

        $u = $this->add();

        $this->stdout(
            Yii::t('console', 'User added.')."\n"
            ."email={$u->email}\n"
            ."password={$this->password}\n"
        );
    }

    /**
     * This is the commands for creating admins.
     *
     * ```
     * $ ./yii user/add-admin --email=test@example.com --password=test
     * $ ./yii user/add-admin -e=test@example.com -p=test
     * ```
     *
     */
    public function actionAddAdmin() {
        $check = $this->checkArgs();
        if ($check !== false) {
            return $check;
        }
        unset($check);

        $u = $this->add(User::GROUP_ADMIN);

        $this->stdout(
            Yii::t('console', 'Admin added.')."\n"
            ."email={$u->email}\n"
            ."password={$this->password}\n"
        );
    }

    public function optionAliases()
    {
        return [
            'p' => 'password',
            'e' => 'email',
        ];
    }

    public function options()
    {
        return ['password', 'email'];
    }
}