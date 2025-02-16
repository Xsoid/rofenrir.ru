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
    public $vendingCount;
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
            'char_id' => 'Fenrir ID',
            'account_id' => 'Account ID',
            'char_num' => 'Char Num',
            'name' => 'Ник',
            'title' => 'Ник',
            'class' => 'Профессия',
            'className' => 'Профессия',
            'base_level' => 'Базовый уровень',
            'job_level' => 'Джоб уровень',
            'base_exp' => 'Базовый опыт',
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
            'last_map' => 'Локация',
            'last_x' => 'Last X',
            'last_y' => 'Last Y',
            'save_map' => 'Save Map',
            'save_x' => 'Save X',
            'save_y' => 'Save Y',
            'partner_id' => 'Partner ID',
            'online' => 'Онлайн',
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

    public function convertEncoding($string)
    {
        $result = $string;
        $result = mb_convert_encoding($result, 'utf-8', 'cp1251');
        return $result;
    }

    public function getTitle()
    {
        return $this->convertEncoding($this->name);
    }

    public static function getClassList()
    {
        return [
            0 => 'Новичок [Novice]',
            1 => 'Мечник [Swordman]',
            2 => 'Маг [Magician]',
            3 => 'Лучник [Archer]',
            4 => 'Послушник [Acolyte]',
            5 => 'Торговец [Merchant]',
            6 => 'Вор [Thief]',
            7 => 'Рыцарь [Knight]',
            8 => 'Священник [Priest]',
            9 => 'Волшебник [Wizard]',
            10 => 'Кузнец [Blacksmith]',
            11 => 'Охотник [Hunter]',
            12 => 'Убийца [Assassin]',
            14 => 'Крестоносец [Crusader]',
            15 => 'Монах [Monk]',
            16 => 'Мудрец [Sage]',
            17 => 'Разбойник [Rogue]',
            18 => 'Алхимик [Alchemist]',
            19 => 'Бард [Bard]',
            20 => 'Танцовщица [Dancer]',

//            22 => 'Wedding',
            23 => 'Супер Новичок [Super Novice]',
            24 => 'Стрелок [Gunslinger]',
            25 => 'Ниндзя [Ninja]',
//            26 => 'Christmas',
//            27 => 'Summer',
//            28 => 'Hanbok',

            4001 => 'Novice High',
            4002 => 'Swordman High',
            4003 => 'Magician High',
            4004 => 'Archer High',
            4005 => 'Acolyte High',
            4006 => 'Merchant High',
            4007 => 'Thief High',
            4008 => 'Командор [Lord Knight]',
            4009 => 'Епископ [High Priest]',
            4010 => 'Архимаг [High Wizard]',
            4011 => 'Оружейник [Whitesmith]',
            4012 => 'Снайпер [Sniper]',
            4013 => 'Ассасин [Assassin Cross]',
            4015 => 'Паладин [Paladin]',
            4016 => 'Мистик [Champion]',
            4017 => 'Профессор [Professor]',
            4018 => 'Сталкер [Stalker]',
            4019 => 'Биохимик [Creator]',
            4020 => 'Менестрель [Clown]',
            4021 => 'Цыганка [Gypsy]',

//            4023 => 'Baby Novice',
//            4024 => 'Baby Swordman',
//            4025 => 'Baby Magician',
//            4026 => 'Baby Archer',
//            4027 => 'Baby Acolyte',
//            4028 => 'Baby Merchant',
//            4029 => 'Baby Thief',
//            4030 => 'Baby Knight',
//            4031 => 'Baby Priest',
//            4032 => 'Baby Wizard',
//            4033 => 'Baby Blacksmith',
//            4034 => 'Baby Hunter',
//            4035 => 'Baby Assassin',
//
//            4037 => 'Baby Crusader',
//            4038 => 'Baby Monk',
//            4039 => 'Baby Sage',
//            4040 => 'Baby Rogue',
//            4041 => 'Baby Alchemist',
//            4042 => 'Baby Bard',
//            4043 => 'Baby Dancer',

//            4045 => 'Super Baby',
            4046 => 'Таэквондист [Taekwon]',
            4047 => 'Гладиатор [Star Gladiator]',
            4048 => 'Гладиатор [Star Gladiator] (Union)',
            4049 => 'Медиум [Soul Linker]',
            4050 => 'Gangsi',
            4051 => 'Death Knight',
            4052 => 'Dark Collector',

            4054 => 'Рунмейстер [Rune Knight]',
            4055 => 'Чародей [Warlock]',
            4056 => 'Рейнджер [Ranger]',
            4057 => 'Архиепископ [Arch Bishop]',
            4058 => 'Механик [Mechanic]',
            4059 => 'Каратель [Guillotine Cross]',
            4060 => 'Рунмейстер [Rune Knight]',
            4061 => 'Чародей [Warlock]',
            4062 => 'Рейнджер [Ranger]',
            4063 => 'Архиепископ [Arch Bishop]',
            4064 => 'Механик [Mechanic]',
            4065 => 'Каратель [Guillotine Cross]',
            4066 => 'Тамплиер [Royal Guard]',
            4067 => 'Элементалист [Sorcerer]',
            4068 => 'Маэстро [Minstrel]',
            4069 => 'Муза [Wanderer]',
            4070 => 'Отшельник [Sura]',
            4071 => 'Генетик [Genetic]',
            4072 => 'Преследователь [Shadow Chaser]',
            4073 => 'Тамплиер [Royal Guard]',
            4074 => 'Элементалист [Sorcerer]',
            4075 => 'Маэстро [Minstrel]',
            4076 => 'Муза [Wanderer]',
            4077 => 'Отшельник [Sura]',
            4078 => 'Генетик [Genetic]',
            4079 => 'Преследователь [Shadow Chaser]',

//            4096 => 'Baby Rune Knight',
//            4097 => 'Baby Warlock',
//            4098 => 'Baby Ranger',
//            4099 => 'Baby Arch Bishop',
//            4100 => 'Baby Mechanic',
//            4101 => 'Baby Glt. Cross',
//            4102 => 'Baby Royal Guard',
//            4103 => 'Baby Sorcerer',
//            4104 => 'Baby Minstrel',
//            4105 => 'Baby Wanderer',
//            4106 => 'Baby Sura',
//            4107 => 'Baby Genetic',
//            4108 => 'Baby Shadow Chaser',

            4190 => 'Экспертный Новичок [Ex. Super Novice]',
//            4191 => 'Ex. Super Baby',

            4215 => 'Мятежник [Rebellion]',
            4211 => 'Кагеро [Kagerou]',
            4212 => 'Оборо [Oboro]',

            4218 => 'Summoner',

            4220 => 'Baby Summoner',

//            4222 => 'Baby Ninja',
//            4223 => 'Baby Kagero',
//            4224 => 'Baby Oboro',
//            4225 => 'Baby Taekwon',
//            4226 => 'Baby Star Glad',
//            4227 => 'Baby Soul Linker',
//            4228 => 'Baby Gunslinger',
//            4229 => 'Baby Rebellion',

//            4238 => 'Baby Star Glad (Union)',
            4239 => 'Звёздный Император [Star Emperor]',
            4240 => 'Жнец душ [Soul Reaper]',

            4252 => 'Рыцарь-дракон [Dragon Knight]',
            4253 => 'Мастер [Meister]',
            4254 => 'Тень [Shadow Cross]',
            4255 => 'Архимаг [Arch Mage]',
            4256 => 'Кардинал [Cardinal]',
            4257 => 'Ястреб [Windhawk]',
            4258 => 'Имперский гвардеец [Imperial Guard]',
            4259 => 'Биоло [Biolo]',
            4260 => 'Преследователь бездны [Abyss Chaser]',
            4261 => 'Повелитель Стихий [Elemental Master]',
            4262 => 'Инквизитор [Inquisitor]',
            4263 => 'Трубадур [Troubadour]',
            4264 => 'Трувер [Trouvere]',

            4302 => 'Небесный Император [Sky Emperor]',
            4303 => 'Аскет душ [Soul Ascetic]',
            4304 => 'Синкиро [Shinkiro]',
            4305 => 'Ширануи [Shiranui]',
            4306 => 'Ночная стража [Night Watch]',
            4307 => 'Сверх Новичок [Hyper Novice]',
            4308 => 'Духовный Призыватель [Spirit Handler]',
        ];
    }

    public function getClassName()
    {
        $classes = self::getClassList();
        return isset($classes[$this->class]) ? $classes[$this->class] : $this->class;
    }

    public function getVending()
    {
        return $this->hasOne(Vendings::className(), ['char_id' => 'char_id']);
    }
}
