<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guild".
 *
 * @property int $guild_id
 * @property string $name
 * @property int $char_id
 * @property string $master
 * @property int $guild_lv
 * @property int $connect_member
 * @property int $max_member
 * @property int $average_lv
 * @property int $exp
 * @property int $next_exp
 * @property int $skill_point
 * @property string $mes1
 * @property string $mes2
 * @property int $emblem_len
 * @property int $emblem_id
 * @property resource|null $emblem_data
 * @property string|null $last_master_change
 */
class Guild extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guild';
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
            [['char_id'], 'required'],
            [['char_id', 'guild_lv', 'connect_member', 'max_member', 'average_lv', 'exp', 'next_exp', 'skill_point', 'emblem_len', 'emblem_id'], 'integer'],
            [['emblem_data'], 'string'],
            [['last_master_change'], 'safe'],
            [['name', 'master'], 'string', 'max' => 24],
            [['mes1'], 'string', 'max' => 60],
            [['mes2'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'guild_id' => 'Fenrir Guild ID',
            'name' => 'Название',
            'title' => 'Название',
            'char_id' => 'Char ID',
            'master' => 'Мастер',
            'masterName'=> 'Мастер',
            'guild_lv' => 'Уровень Гильдии',
            'connect_member' => 'Connect Member',
            'max_member' => 'Max Member',
            'average_lv' => 'Average Lv',
            'exp' => 'Exp',
            'next_exp' => 'Next Exp',
            'skill_point' => 'Skill Point',
            'mes1' => 'Mes1',
            'mes2' => 'Mes2',
            'emblem_len' => 'Emblem Len',
            'emblem_id' => 'Emblem ID',
            'emblem_data' => 'Emblem Data',
            'last_master_change' => 'Last Master Change',
        ];
    }

       public function convertEncoding($string)
    {
        $result = $string;
        $result = mb_convert_encoding($result, 'cp1252', 'utf-8');
        $result = mb_convert_encoding($result, 'utf-8', 'cp1251');
        return $result;
    }

    public function getTitle()
    {
        return $this->convertEncoding($this->name);
    }

    public function getMasterName() 
    {
        return $this->convertEncoding($this->master);

    }


}
