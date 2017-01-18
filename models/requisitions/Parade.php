<?php
namespace app\models\requisitions;

use Yii;
use app\models\Requisition;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;

/**
 *
 */
class Parade extends Requisition
{
    const TYPE = 'parade';
    const NAME = 'Бал';

    public $genre;
    public $age;

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

    public function formAttributeLabels(){
        return [
            'genre' => 'Жанр',
            'age' => 'Возраст',
        ];
    }

    public function getTypeFields()
    {
        return [
            'genre' => [
                'type' => 'textInput',
            ],
            'age' => [
                'type' => 'textInput',
            ],
        ];
    }
}
