<?php
namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\helpers\StringHelper;

/**
 * User model
 *
 * @property integer $id
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $group
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class User extends ActiveRecord implements IdentityInterface
    const SCENARIO_PROFILE = 'profile';

{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    const GROUP_DEFAULT = 0;
    const GROUP_ADMIN = 1;
    const GROUP_MODERATOR = 2;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels(){
        return array(
            'email' => 'E-mail',
            'password' => 'Пароль',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'birthday' => 'День рождения',
            'dateBirthday' => 'День рождения',
            'nick' => 'Ник',
            'city' => 'Город',
            'phone' => 'Телефон',
            'soc_vk' => 'Вконтакте',
        );
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'trim', 'on' => self::SCENARIO_PROFILE],
            ['email', 'required', 'on' => self::SCENARIO_PROFILE],
            ['email', 'email', 'on' => self::SCENARIO_PROFILE],
            ['email', 'unique', 
                'targetClass' => '\app\models\User', 
                'message' => 'Пользователь с таким e-mail уже существует.',
                'on' => self::SCENARIO_PROFILE,
            ],
            ['status', 'default', 'value' => self::STATUS_ACTIVE, 'on' => self::SCENARIO_PROFILE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED], 'on' => self::SCENARIO_PROFILE],
            ['group', 'default', 'value' => self::GROUP_DEFAULT, 'on' => self::SCENARIO_PROFILE],
            [['name', 'surname', 'nick', 'soc_vk'], 'string', 'max' => 255],
            ['city', 'string', 'max' => 100],
            ['phone', 'string', 'max' => 50],
            ['dateBirthday', 'date'],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by email
     *
     * @param string $email
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
    }
    
    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public function __toString(){
        $parts = StringHelper::explode($this->email, '@');
        return $parts[0];
    }

    public function getDateBirthday() {
        if (empty($this->birthday) || ($this->birthday === '0000-00-00')) {
            return '';
        }
        return Yii::$app->formatter->asDate($this->birthday, 'dd.MM.yyyy');
    }

    public function setDateBirthday($value) {
        if (empty($value)) {
            return;
        }
        $this->birthday = Yii::$app->formatter->asDate($value, 'yyyy-MM-dd');
    }
}
