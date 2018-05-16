<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GameAccount */
/* @var $user app\models\User */

$this->title = 'RO Fenrir - Ragnarok Online Server / Создание аакаунта';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'RoFenrir -  русский экспериментальный сервер Ragnarok Online. Бесплатный: без абонентской платы и внутренних платежей.'
]);
?>
<div class="site-index">
    <div class="body-content">
        <h1>Создание аакаунта</h1>

        <? if (empty($user->newGameEmails)): ?>
            <div class="alert alert-danger">
                Отсутствуют подвержденные email, для которыех не создан игровой аккаунт.<br>
                <a href="<?= Yii::$app->params['profileUrl'] ?>" class="alert-link" target="_blank">Добавить E-mail</a>
            </div>
        <? else: ?>
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
            <?= $form->field($model, 'email')->dropDownList($user->newGameEmails) ?>
            <?= $form->field($model, 'userid')->textInput() ?>
            <?= $form->field($model, 'sex')->radioList(\app\models\GameAccount::getSexList()) ?>
            <?= $form->field($model, 'user_pass')->textInput() ?>

            <div class="form-group">
                <div class="col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-9">
                    <?= Html::submitButton('Создать', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        <? endif; ?>
    </div>
</div>
