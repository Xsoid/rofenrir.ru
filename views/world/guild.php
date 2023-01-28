<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Гильдии мира Fenrir - Ragnarok Online Server';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Ragnarok Online, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Бесплатный игровой сервер Ragnarok Online. Нет абонентская платы и внутренних покупок. Игра без ограничений. Без вайпов с открытия в 2011 году.'
]);
$this->params['breadcrumbs'][] = ['label' => 'Мир Fenrir', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Гильдии мира Fenrir';
?>



<div class="row">
    <div class="col">
        <h2>Гильдии мира Fenrir</h2>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            'columns' => [
            //'name',
            'title',
            //'master',
            'masterName',
            'guild_lv',
            'guild_id',
            ],
        ]); ?>
    </div>
</div>
