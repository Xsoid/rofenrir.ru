<?php

/* @var $this yii\web\View */

$this->title = 'Мир Fenrir - Ragnarok Online Server';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Бесплатный игровой сервер Ragnarok Online. Нет абонентская платы и внутренних покупок. Игра без ограничений. Без вайпов с открытия в 2011 году.'
]);
$this->params['breadcrumbs'][] = 'Мир Fenrir';
?>


<div class="row">
    <div class="col-lg-3">
        <div class="bs-component">
            <?= $this->render('_menu') ?>
        </div>
    </div>
    <div class="col-lg-9">
        <p>Описание мира Fenrir</p>
    </div>
</div>