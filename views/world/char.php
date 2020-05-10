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
$this->params['breadcrumbs'][] = ['label' => 'Мир Fenrir', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Жители мир Fenrir';
?>



<div class="row">
    <div class="col">
        <p>Показывать:<br></p>
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
            <?= $form->field($searchModel, 'class', [
                'labelOptions' => [
                    'class' => 'hidden',
                ],
            ])->dropDownList(\app\models\Char::getClassList(), [
                'prompt' => 'Все профессии',
            ]) ?>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
        <h2>Жители мира Fenrir</h2>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            'columns' => [
        //        'char_id',
        //        'account_id',
        //'name',
                'title',
                'className',
                'base_level',
                'job_level',
        //'guild_id',
                'last_map',
        //'last_x',
        //'last_y',
        //        'online',
        //'sex',
        //'clan_id',
            ],
            'rowOptions' => function($model) {
                $classNames = [];
                if ($model->online) {
                    $classNames[] = 'success';
                }
                if ($model->vendingCount) {
                    $classNames[] = 'warning';
                }
                return [
                    'class' => implode(' ', $classNames),
                ];
            }
        ]); ?>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('_menu') ?>
        </div>
    </div>
</div>
