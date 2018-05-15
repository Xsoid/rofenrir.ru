<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "login".
 *
 * @property int $account_id
 * @property string $userid
 * @property string $user_pass
 * @property string $sex
 * @property string $email
 * @property int $group_id
 * @property int $state
 * @property int $unban_time
 * @property int $expiration_time
 * @property int $logincount
 * @property string $lastlogin
 * @property string $last_ip
 * @property string $birthdate
 * @property int $character_slots
 * @property string $pincode
 * @property int $pincode_change
 * @property int $vip_time
 * @property int $old_group
 * @property Char[] $chars
 */
class GameAccount extends \yii\db\ActiveRecord
{
    public $new_user_pass;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'login';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_fenrir');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['new_user_pass'], 'string', 'max' => 32],
            [['new_user_pass', 'user_pass'], 'match', 'pattern' => '/^[a-zA-Z0-9]+$/', 'message'=>'Допустимы символы латинского алфавита и цифры'],
            [['userid', 'email'], 'unique'],
            [['userid', 'email', 'user_pass'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'account_id' => 'Account ID',
            'userid' => 'Логин',
            'user_pass' => 'Пароль',
            'sex' => 'Sex',
            'email' => 'E-mail',
            'group_id' => 'Group ID',
            'state' => 'State',
            'unban_time' => 'Unban Time',
            'expiration_time' => 'Expiration Time',
            'logincount' => 'Logincount',
            'lastlogin' => 'Lastlogin',
            'last_ip' => 'Last Ip',
            'birthdate' => 'Birthdate',
            'character_slots' => 'Character Slots',
            'pincode' => 'Pincode',
            'pincode_change' => 'Pincode Change',
            'vip_time' => 'Vip Time',
            'old_group' => 'Old Group',
        ];
    }

    /**
     * @return Char[]|\yii\db\ActiveQuery
     */
    public function getChars()
    {
        return $this->hasMany(Char::className(), ['account_id' => 'account_id']);
    }

    public function changePassword($password)
    {
        $this->user_pass = $password;
        return $this->save();
    }
}
