<?php
namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;

/**
 * Requisition model
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
class Requisition extends ActiveRecord
{
    // const SCENARIO_PROFILE = 'profile';
    const TYPE = '';
    const NAME = 'Заявка по умолчанию';
    private static $_types = false;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%requisition}}';
    }

    public static function getTypeClasses()
    {
        return [
            "app\\models\\requisitions\\Shooting",
            "app\\models\\requisitions\\Parade",
        ];
    }

    public static function getTypes()
    {
        if (self::$_types === false) {
            self::$_types = [];
            foreach (self::getTypeClasses() as $className) {
                if (!class_exists($className)) {
                    continue;
                }
                $id = $className::TYPE;
                $name = $className::NAME;
                self::$_types[$id] = [
                    'id' => $id,
                    'name' => $name,
                    'class' => $className,
                ];
            }
        }
        return self::$_types;
    }

    public static function getTypesIds()
    {
        $types = $this->getTypes();
        return ArrayHelper::map($types, 'id', 'name');
    }

    /**
     * @inheritdoc
     */
    public static function instantiate($row)
    {
        $type = !empty($row['type'])
            ? $row['type']
            : '';
        return self::createByType($type);
    }

    public static function createByType($type)
    {
        $types = self::getTypes();
        $className = !empty($type) && !empty($types) && !empty($types[$type]['class'])
            ? $types[$type]['class']
            : false;
        if ($className) {
            return Yii::createObject($className);
        }
        return new self;
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            BlameableBehavior::className(),
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels(){
        return array_merge([
            'created_by' => 'Кто создал',
            'updated_by' => 'Кто изменил',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата измененя',
            'type' => 'Тип заявки',
            'status' => 'Статус',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'nick' => 'Ник',
            'city' => 'Город',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'soc_vk' => 'Вконтакте',
        ], $this->formAttributeLabels());
    }

    public function formAttributeLabels() {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'nick', 'city', 'email', 'phone', 'soc_vk'], 'required'],
            ['email', 'trim'],
            ['email', 'email'],
            // ['email', 'unique', 
            //     'targetClass' => '\app\models\User', 
            //     'message' => 'Пользователь с таким e-mail уже существует.',
            //     'on' => self::SCENARIO_PROFILE,
            // ],
            // ['status', 'default', 'value' => self::STATUS_ACTIVE, 'on' => self::SCENARIO_PROFILE],
            // ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED], 'on' => self::SCENARIO_PROFILE],
            // ['group', 'default', 'value' => self::GROUP_DEFAULT, 'on' => self::SCENARIO_PROFILE],
            // [['name', 'surname', 'nick', 'soc_vk'], 'string', 'max' => 255],
            // ['city', 'string', 'max' => 100],
            // ['phone', 'string', 'max' => 50],
            // ['dateBirthday', 'date'],
        ];
    }

    public function getTypeFields()
    {
        return [];
    }

    public function afterFind()
    {
        $fields = $this->getTypeFields();
        if (!empty($this->props)) {
            $props = json_decode($this->props, true);
        }
        if (empty($props) || !is_array($props)) {
            $props = [];
        }
        foreach ($props as $fieldName => $value) {
            if (array_key_exists($fieldName, $fields)) {
                $this->$fieldName = $value;
            }
        }
        return parent::afterFind();
    }

    public function beforeSave($insert)
    {
        $fields = $this->getTypeFields();
        $props = [];
        foreach ($fields as $fieldName => $field) {
            $props[$fieldName] = $this->$fieldName;
        }
        $this->props = json_encode($props);
        return parent::beforeSave($insert);
    }
}
