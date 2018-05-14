<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "char".
 *
 * @property int $char_id
 * @property int $account_id
 * @property int $char_num
 * @property string $name
 * @property int $class
 * @property int $base_level
 * @property int $job_level
 * @property string $base_exp
 * @property string $job_exp
 * @property int $zeny
 * @property int $str
 * @property int $agi
 * @property int $vit
 * @property int $int
 * @property int $dex
 * @property int $luk
 * @property int $max_hp
 * @property int $hp
 * @property int $max_sp
 * @property int $sp
 * @property int $status_point
 * @property int $skill_point
 * @property int $option
 * @property int $karma
 * @property int $manner
 * @property int $party_id
 * @property int $guild_id
 * @property int $pet_id
 * @property int $homun_id
 * @property int $hair
 * @property int $hair_color
 * @property int $clothes_color
 * @property int $body
 * @property int $weapon
 * @property int $shield
 * @property int $head_top
 * @property int $head_mid
 * @property int $head_bottom
 * @property int $robe
 * @property string $last_map
 * @property int $last_x
 * @property int $last_y
 * @property string $save_map
 * @property int $save_x
 * @property int $save_y
 * @property int $partner_id
 * @property int $online
 * @property int $father
 * @property int $mother
 * @property int $child
 * @property int $fame
 * @property int $rename
 * @property int $delete_date
 * @property int $elemental_id
 * @property int $moves
 * @property int $unban_time
 * @property int $font
 * @property int $uniqueitem_counter
 * @property string $sex
 * @property int $hotkey_rowshift
 * @property int $clan_id
 * @property string $last_login
 */
class Char extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'char';
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
            [['account_id', 'char_num', 'class', 'base_level', 'job_level', 'base_exp', 'job_exp', 'zeny', 'str', 'agi', 'vit', 'int', 'dex', 'luk', 'max_hp', 'hp', 'max_sp', 'sp', 'status_point', 'skill_point', 'option', 'karma', 'manner', 'party_id', 'guild_id', 'pet_id', 'homun_id', 'hair', 'hair_color', 'clothes_color', 'body', 'weapon', 'shield', 'head_top', 'head_mid', 'head_bottom', 'robe', 'last_x', 'last_y', 'save_x', 'save_y', 'partner_id', 'online', 'father', 'mother', 'child', 'fame', 'rename', 'delete_date', 'elemental_id', 'moves', 'unban_time', 'font', 'uniqueitem_counter', 'hotkey_rowshift', 'clan_id'], 'integer'],
            [['sex'], 'string'],
            [['last_login'], 'safe'],
            [['name'], 'string', 'max' => 30],
            [['last_map', 'save_map'], 'string', 'max' => 11],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'char_id' => 'Char ID',
            'account_id' => 'Account ID',
            'char_num' => 'Char Num',
            'name' => 'Name',
            'class' => 'Class',
            'base_level' => 'Base Level',
            'job_level' => 'Job Level',
            'base_exp' => 'Base Exp',
            'job_exp' => 'Job Exp',
            'zeny' => 'Zeny',
            'str' => 'Str',
            'agi' => 'Agi',
            'vit' => 'Vit',
            'int' => 'Int',
            'dex' => 'Dex',
            'luk' => 'Luk',
            'max_hp' => 'Max Hp',
            'hp' => 'Hp',
            'max_sp' => 'Max Sp',
            'sp' => 'Sp',
            'status_point' => 'Status Point',
            'skill_point' => 'Skill Point',
            'option' => 'Option',
            'karma' => 'Karma',
            'manner' => 'Manner',
            'party_id' => 'Party ID',
            'guild_id' => 'Guild ID',
            'pet_id' => 'Pet ID',
            'homun_id' => 'Homun ID',
            'hair' => 'Hair',
            'hair_color' => 'Hair Color',
            'clothes_color' => 'Clothes Color',
            'body' => 'Body',
            'weapon' => 'Weapon',
            'shield' => 'Shield',
            'head_top' => 'Head Top',
            'head_mid' => 'Head Mid',
            'head_bottom' => 'Head Bottom',
            'robe' => 'Robe',
            'last_map' => 'Last Map',
            'last_x' => 'Last X',
            'last_y' => 'Last Y',
            'save_map' => 'Save Map',
            'save_x' => 'Save X',
            'save_y' => 'Save Y',
            'partner_id' => 'Partner ID',
            'online' => 'Online',
            'father' => 'Father',
            'mother' => 'Mother',
            'child' => 'Child',
            'fame' => 'Fame',
            'rename' => 'Rename',
            'delete_date' => 'Delete Date',
            'elemental_id' => 'Elemental ID',
            'moves' => 'Moves',
            'unban_time' => 'Unban Time',
            'font' => 'Font',
            'uniqueitem_counter' => 'Uniqueitem Counter',
            'sex' => 'Sex',
            'hotkey_rowshift' => 'Hotkey Rowshift',
            'clan_id' => 'Clan ID',
            'last_login' => 'Last Login',
        ];
    }

    public function getTitle()
    {
        $name = $this->name;
        $name = mb_convert_encoding($name, 'cp1252', 'utf-8');
        $name = mb_convert_encoding($name, 'utf-8', 'cp1251');
        return $name;
    }

    public static function getClassList()
    {
        return [
            0 => 'Без профессии'
        ];
    }

    public function getClassName()
    {
        $classes = self::getClassList();
        return isset($classes[$this->class]) ? $classes[$this->class] : $this->class;
    }
}
