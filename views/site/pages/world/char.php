<?php

/* @var $this yii\web\View */

$this->title = 'Жители мир Fenrir - Ragnarok Online Server';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Бесплатный игровой сервер Ragnarok Online. Нет абонентская платы и внутренних покупок. Игра без ограничений. Без вайпов с открытия в 2011 году.'
]);
$this->params['breadcrumbs'][] = 'Мир Fenrir';
$this->params['breadcrumbs'][] = 'Жители мир Fenrir';
?>


<div class="row">
    <div class="col-lg-3">
        <div class="bs-component">
            <?= $this->render('_menu') ?>
        </div>
    </div>
    <div class="col-lg-9">
        <p>Показывать:<br>
        <div class="checkbox">
          <label style="padding-right: 15px;">
            <input type="checkbox"> Онлайн
          </label>
          <label style="padding-right: 15px;">
            <input type="checkbox"> Офлайн
          </label>
          <label style="padding-right: 15px;">
            <input type="checkbox"> Торговля
          </label>
        </div>
        <select class="form-control">
          <option>Все</option>
          <option>Novice</option>
          <option>Sword</option>
        </select>
        </p>
        <h2>Жители мира Fenrir</h2>
    </div>
</div>