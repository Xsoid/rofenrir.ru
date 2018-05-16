<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendings".
 *
 * @property int $id
 * @property int $account_id
 * @property int $char_id
 * @property string $sex
 * @property string $map
 * @property int $x
 * @property int $y
 * @property string $title
 * @property int $autotrade
 * @property string $body_direction
 * @property string $head_direction
 * @property string $sit
 */
class Vendings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendings';
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
            [['id', 'account_id', 'char_id', 'map', 'x', 'y', 'title', 'autotrade'], 'required'],
            [['id', 'account_id', 'char_id', 'x', 'y', 'autotrade'], 'integer'],
            [['sex'], 'string'],
            [['map'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 80],
            [['body_direction', 'head_direction', 'sit'], 'string', 'max' => 1],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'account_id' => 'Account ID',
            'char_id' => 'Char ID',
            'sex' => 'Sex',
            'map' => 'Map',
            'x' => 'X',
            'y' => 'Y',
            'title' => 'Title',
            'autotrade' => 'Autotrade',
            'body_direction' => 'Body Direction',
            'head_direction' => 'Head Direction',
            'sit' => 'Sit',
        ];
    }
}
