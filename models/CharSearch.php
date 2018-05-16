<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Char;

/**
 * CharSearch represents the model behind the search form of `app\models\Char`.
 */
class CharSearch extends Char
{
    public $is_online = 1;
    public $is_offline;
    public $is_trade = 1;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['char_id', 'account_id', 'char_num', 'class', 'base_level', 'job_level', 'base_exp', 'job_exp', 'zeny', 'str', 'agi', 'vit', 'int', 'dex', 'luk', 'max_hp', 'hp', 'max_sp', 'sp', 'status_point', 'skill_point', 'option', 'karma', 'manner', 'party_id', 'guild_id', 'pet_id', 'homun_id', 'hair', 'hair_color', 'clothes_color', 'body', 'weapon', 'shield', 'head_top', 'head_mid', 'head_bottom', 'robe', 'last_x', 'last_y', 'save_x', 'save_y', 'partner_id', 'online', 'father', 'mother', 'child', 'fame', 'rename', 'delete_date', 'elemental_id', 'moves', 'unban_time', 'font', 'uniqueitem_counter', 'hotkey_rowshift', 'clan_id'], 'integer'],
            [['name', 'last_map', 'save_map', 'sex', 'last_login'], 'safe'],
            [['is_online', 'is_offline', 'is_trade'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'is_online' => 'Онлайн',
            'is_offline' => 'Офлайн',
            'is_trade' => 'Торговля',
        ]);
    }


    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Char::find();
        $query
            ->select([
                'char.*',
                'COUNT(vendings.char_id) as vendingCount',
            ])
            ->joinWith('vending')
            ->groupBy('{{char}}.char_id');

        $query->orderBy([
            'online' => SORT_DESC,
            'vendingCount' => SORT_DESC,
            'base_level' => SORT_DESC,
            'job_level' => SORT_DESC,
            'base_exp' => SORT_DESC,
        ]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => false,
            'pagination' => [
                'pageSize' => 100,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
//        $query->andFilterWhere([
//            'char.char_id' => $this->char_id,
//            'char.account_id' => $this->account_id,
//            'char.char_num' => $this->char_num,
//            'char.base_level' => $this->base_level,
//            'char.job_level' => $this->job_level,
//            'char.base_exp' => $this->base_exp,
//            'char.job_exp' => $this->job_exp,
//            'char.zeny' => $this->zeny,
//            'char.str' => $this->str,
//            'char.agi' => $this->agi,
//            'char.vit' => $this->vit,
//            'char.int' => $this->int,
//            'char.dex' => $this->dex,
//            'char.luk' => $this->luk,
//            'char.max_hp' => $this->max_hp,
//            'char.hp' => $this->hp,
//            'char.max_sp' => $this->max_sp,
//            'char.sp' => $this->sp,
//            'char.status_point' => $this->status_point,
//            'char.skill_point' => $this->skill_point,
//            'char.option' => $this->option,
//            'char.karma' => $this->karma,
//            'char.manner' => $this->manner,
//            'char.party_id' => $this->party_id,
//            'char.guild_id' => $this->guild_id,
//            'char.pet_id' => $this->pet_id,
//            'char.homun_id' => $this->homun_id,
//            'char.hair' => $this->hair,
//            'char.hair_color' => $this->hair_color,
//            'char.clothes_color' => $this->clothes_color,
//            'char.body' => $this->body,
//            'char.weapon' => $this->weapon,
//            'char.shield' => $this->shield,
//            'char.head_top' => $this->head_top,
//            'char.head_mid' => $this->head_mid,
//            'char.head_bottom' => $this->head_bottom,
//            'char.robe' => $this->robe,
//            'char.last_x' => $this->last_x,
//            'char.last_y' => $this->last_y,
//            'char.save_x' => $this->save_x,
//            'char.save_y' => $this->save_y,
//            'char.partner_id' => $this->partner_id,
//            'char.online' => $this->online,
//            'char.father' => $this->father,
//            'char.mother' => $this->mother,
//            'char.child' => $this->child,
//            'char.fame' => $this->fame,
//            'char.rename' => $this->rename,
//            'char.delete_date' => $this->delete_date,
//            'char.elemental_id' => $this->elemental_id,
//            'char.moves' => $this->moves,
//            'char.unban_time' => $this->unban_time,
//            'char.font' => $this->font,
//            'char.uniqueitem_counter' => $this->uniqueitem_counter,
//            'char.hotkey_rowshift' => $this->hotkey_rowshift,
//            'char.clan_id' => $this->clan_id,
//            'char.last_login' => $this->last_login,
//        ]);

        if ($this->is_online) {
            $query->andFilterWhere(['char.online' => 1]);
        }
        if ($this->is_offline) {
            $query->andFilterWhere(['char.online' => 0]);
        }
        if ($this->is_trade) {
        }
        $query->andFilterWhere(['in', 'char.class', $this->class]);

//        $query->andFilterWhere(['like', 'char.name', $this->name])
//            ->andFilterWhere(['like', 'char.last_map', $this->last_map])
//            ->andFilterWhere(['like', 'char.save_map', $this->save_map])
//            ->andFilterWhere(['like', 'char.sex', $this->sex]);

        return $dataProvider;
    }
}
