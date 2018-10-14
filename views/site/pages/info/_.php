<?php

/* @var $this yii\web\View */

$this->title = 'Ragnarok Online Server';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'RoFenrir - бесплатный игровой сервер Ragnarok Online. Нет абонентская платы и внутренних покупок. Игра без ограничений. Без вайпов с открытия в 2011 году.'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = 'Название';
?>

<div class="row">
    <div class="col-md-9">
        <h1>Заголовок</h1>
        Текст
    </div>
    <div class="col-md-3">
        <div class="bs-component">
            <?= $this->render('_menu') ?>
        </div>
    </div>
</div>