<?php
namespace app\models\requisitions;

use Yii;
use app\models\Requisition;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;

/**
 *
 */
class Shooting extends Requisition
{
    const TYPE = 'shooting';
    const NAME = 'Стрельба';

    public $character;
    public $about;
    public $sex;
    public $confirmed;
    public $list;

    public function init()
    {
        $this->type = self::TYPE;
        parent::init();
    }

    public static function find()
    {
        return new RequisitionQuery(get_called_class(), ['type' => self::TYPE]);
    }

    public function beforeSave($insert)
    {
        $this->type = self::TYPE;
        return parent::beforeSave($insert);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            [['character'], 'required'],
            ['sex', 'integer'],
            [['about', 'confirmed', 'list'], 'safe'],
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
        ]);
    }

    public function formAttributeLabels(){
        return [
            'character' => 'Персонаж',
            'about' => 'О себе',
            'sex' => 'Пол',
            'confirmed' => 'Согласен с правилами',
            'list' => 'Список',
        ];
    }

    public function getTypeFields()
    {
        return [
            'character' => [
                'type' => 'textInput',
            ],
            'about' => [
                'type' => 'textarea',
            ],
            'sex' => [
                'type' => 'radioList',
                'options' => [
                    0 => 'М',
                    1 => 'Ж',
                ],
            ],
            'confirmed' => [
                'type' => 'checkbox',
            ],
            'list' => [
                'type' => 'dropDownList',
                'options' => [
                    1 => 'Первый',
                    2 => 'Второй',
                ],
            ],
        ];
    }
}
