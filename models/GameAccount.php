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
            [['sex'], 'string'],
            [['group_id', 'state', 'unban_time', 'expiration_time', 'logincount', 'character_slots', 'pincode_change', 'vip_time', 'old_group'], 'integer'],
            [['lastlogin', 'birthdate'], 'safe'],
            [['userid'], 'string', 'max' => 23],
            [['new_user_pass'], 'string', 'max' => 32],
            [['new_user_pass'], 'match', 'pattern' => '/^[a-zA-Z0-9]+$/', 'message'=>'Допустимы символы латинского алфавита и цифры'],
            [['email'], 'string', 'max' => 39],
            [['last_ip'], 'string', 'max' => 100],
            [['pincode'], 'string', 'max' => 4],
            [['userid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'account_id' => 'Account ID',
            'userid' => 'Userid',
            'user_pass' => 'User Pass',
            'sex' => 'Sex',
            'email' => 'Email',
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
