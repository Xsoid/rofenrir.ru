<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

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



<div class="char-index">
    <div class="row">
        <div class="col-lg-9">
            <p>Показывать:<br>            </p>

            <?php $form = ActiveForm::begin([
                'action' => ['char'],
                'method' => 'get',
            ]); ?>

            <div class="form-group">
                <?= $form->field($searchModel, 'is_online', [
                    'options' => [
                        'class' => 'checkbox-inline'
                    ],
                ])->checkbox() ?>
                <?= $form->field($searchModel, 'is_offline', [
                    'options' => [
                        'class' => 'checkbox-inline'
                    ],
                ])->checkbox() ?>
                <?= $form->field($searchModel, 'is_trade', [
                    'options' => [
                        'class' => 'checkbox-inline'
                    ],
                ])->checkbox() ?>

                <?= $form->field($searchModel, 'class')->dropDownList(\app\models\Char::getClassList(), [
                    'prompt' => 'Все',
                ]) ?>
            </div>


            <div class="form-group">
                <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

            <h2>Жители мира Fenrir</h2>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
                'columns' => [
//                    'char_id',
//                    'account_id',
//            'name',
                    'title',
                    'class',
                    'base_level',
                    'job_level',
//            'guild_id',
                    'last_map',
//            'last_x',
//            'last_y',
                    'online',
//            'sex',
//            'clan_id',
                ],
                'rowOptions' => function($model) {
                    $classNames = [];
                    if ($model->online) {
                        $classNames[] = 'char-online';
                    }
                    if ($model->vendingCount) {
                        $classNames[] = 'char-vending';
                    }
                    return [
                        'class' => implode(' ', $classNames),
                    ];
                }
            ]); ?>
        </div>
        <div class="col-lg-3">
            <div class="bs-component">
                <?= $this->render('_menu') ?>
            </div>
        </div>
    </div>
</div>

<style>
.table-striped > tbody > tr.char-online {
    background-color: #21a500;
    color: #fff;
}
.table-striped > tbody > tr.char-online:nth-of-type(odd) {
    background-color: #3aa52e;
}
.table-striped > tbody > tr.char-vending {
    background-color: #d8752f;
    color: #fff;
}
.table-striped > tbody > tr.char-vending:nth-of-type(odd) {
    background-color: #ff8b39;
}
</style>