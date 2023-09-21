<?php

/* @var $this yii\web\View */

$this->title = 'Мир RoFenrir';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'MMORPG, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'RoFenrir - бесплатный игровой сервер MMORPG. Нет абонентская платы и внутренних покупок. Игра без ограничений. Без вайпов с открытия в 2011 году.'
]);
$this->params['breadcrumbs'][] = 'Мир RoFenrir';
?>


<div class="row">
    <div class="col">
        <p>База актуальных данных для сервера.</p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('_menu') ?>
        </div>
    </div>
</div>