<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Guild;
use yii\db\conditions\OrCondition;

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
class GuildSearch extends Guild
{
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
            'guild_id' => 'Guild ID',
            'name' => 'Name',
            'char_id' => 'Char ID',
            'master' => 'Master',
            'guild_lv' => 'Guild Lv',
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

     public function search($params) {
        $query = Guild::find()->cache(300);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => false,
            'pagination' => [
                'pageSize' => 50,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        return $dataProvider;
     }
}
