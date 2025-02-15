<?php

/* @var $this yii\web\View */

$this->title = 'Путиводитель RoFenrir»';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'MMORPG, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'RoFenrir - бесплатный игровой сервер MMORPG. Нет абонентская платы и внутренних покупок. Игра без ограничений. Без вайпов с открытия в 2011 году.'
]);
$this->params['breadcrumbs'][] = 'Путиводитель';
?>

<div class="row">
    <div class="col">
        <h1>Путиводитель</h1>
        <ul>
          <li>Дорам [Doram]
            <ul>
              <li>Summoner</li>
            </ul>
          </li>
          <li>Мир (Города)
            <ul>
              <li><a href="world/brasilis/index">Бразилис</a></li>
            </ul>
          </li>
          <li><a href="eden/index">Компания Эдем [Eden Group]</a>
            <ul>
              <li><a href="eden/instructor_boya">Задания на получение снаряжения</a></li>
            </ul>
          </li>
          <li><a href="rise/">Корпорация Райс</a>
            <ul>
              <li><a href="rise/profsouz">Профсоюз</a></li>
              <li><a href="rise/guild">Регистрация гильдий</a></li>
              <li><a href="nastavnik">Наставник</a></li>
              <li><a href="rise/home_seller">Продавци родины</a></li>
            </ul>
          </li>
          <li><a href="items/">Квесты для получения предметов</a></li>
        </ul>
    </div>
    <div class="col">
        <div class="bs-component">
            <?= $this->render('_menu') ?>
        </div>
    </div>
</div>