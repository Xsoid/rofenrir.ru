<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Жители мира RoFenrir';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'MMORPG, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Бесплатный игровой сервер MMORPG. Нет абонентской платы и внутренних покупок. Игра без ограничений. Без вайпов с открытия в 2011 году.'
]);
$this->params['breadcrumbs'][] = ['label' => 'Мир Fenrir', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Жители мира Fenrir';
?>

<div class="row">
    <div class="col">
        <p style="margin:0;">Показывать:<br></p>
        <?php $form = ActiveForm::begin([
            'action' => ['char'],
            'method' => 'get',
        ]); ?>
        
        <?= $form->field($searchModel, 'is_online', [
            'options' => [
                'class' => 'checkbox-inline',
                'style' => 'float: left; margin: 0 5px 5px 0;'
            ],
        ])->checkbox() ?>
        <?= $form->field($searchModel, 'is_offline', [
            'options' => [
                'class' => 'checkbox-inline',
                'style' => 'margin: 0 5px 5px 0;'
            ],
        ])->checkbox() ?>
        <?= $form->field($searchModel, 'class', [
            'labelOptions' => [
                'style' => 'display: none;',
            ],
            'options' => [
                'style' => 'margin: 0 0 10px 0;',
            ],
        ])->dropDownList(\app\models\Char::getClassList(), [
            'prompt' => 'Все профессии',
        ]) ?>
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>

        <?php ActiveForm::end(); ?>
        <h2>Жители мира Fenrir</h2>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            'columns' => [
                //'account_id',
                //'name',
                'title',
                'className',
                'base_level',
                'job_level',
                //'guild_id',
                'last_map',
                //'char_id',
                //'last_x',
                //'last_y',
                //'online',
                //'sex',
                //'clan_id',
            ],
            'rowOptions' => function($model) {
                $classNames = [];
                if ($model->online) {
                    $classNames[] = 'table-success';
                }
                if ($model->vendingCount) {
                    $classNames[] = 'table-warning';
                }
                return [
                    'class' => implode(' ', $classNames),
                ];
            }
        ]); ?>
    </div>
</div>
