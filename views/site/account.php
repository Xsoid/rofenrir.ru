<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GameAccount */

$this->title = 'Профиль | RoFenrir - Ragnarok Online';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'RoFenrir -  русский экспериментальный сервер Ragnarok Online. Бесплатный: без абонентской платы и внутренних платежей.'
]);
$this->params['breadcrumbs'][] = ['label' => 'Профиль', 'url' => ['/site/profile']];
$this->params['breadcrumbs'][] = 'Управление профилем';
?>
<div class="site-index">
    <div class="body-content">
        <h1>Персонажи</h1>
        <?php $form = ActiveForm::begin([
            'id' => 'form-signup',
            'options' => [
                'class' => 'form-horizontal',
            ],
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-md-9 col-lg-9\">{input}</div>\n<div class=\"col-lg-12 text-right\">{error}</div>",
                'labelOptions' => ['class' => 'col-md-3 col-lg-3 control-label'],
            ],
        ]); ?>
        <?= $form->field($model, 'new_user_pass', [
            'labelOptions' => [
                'label' => 'Новый пароль',
            ],
        ])->textInput() ?>
        <div class="form-group">
            <div class="col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-9">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
        <table class="table table-bordered table-condensed table-striped">
            <tr>
                <th>Имя персонажа</th>
                <th>Пол</th>
                <th>Профессия</th>
                <th>Базовый уровень</th>
                <th>Джоб уровень</th>
                <th>Зен</th>
                <th>Дата последнего входа</th>
            </tr>
            <? foreach ($model->chars as $char): ?>
                <tr>
                    <td><?= $char->title ?></td>
                    <td><?= $char->sex ?></td>
                    <td><?= $char->className ?></td>
                    <td><?= $char->base_level ?></td>
                    <td><?= $char->job_level ?></td>
                    <td><?= $char->zeny ?></td>
                    <td><?= $char->last_login ?></td>
                </tr>
            <? endforeach; ?>
        </table>
    </div>
</div>
