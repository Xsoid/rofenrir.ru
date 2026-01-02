<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GameAccount */

$this->title = 'Профиль | RoFenrir - MMORPG';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'MMORPG, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'RoFenrir -  русский экспериментальный сервер MMORPG. Бесплатный: без абонентской платы и внутренних платежей.'
]);
$this->params['breadcrumbs'][] = ['label' => 'Профиль', 'url' => ['/site/profile']];
$this->params['breadcrumbs'][] = 'Управление профилем';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="card mb-4">
                    <?php $form = ActiveForm::begin([
                        'id' => 'form-signup',
                        'fieldConfig' => [
                            'options' => ['class' => 'row mb-3 align-items-center'],
                            'template' => "{label}\n<div class=\"col-md-8 col-lg-9\">{input}{hint}{error}</div>",
                            'labelOptions' => ['class' => 'col-md-4 col-lg-3 col-form-label text-md-end'],
                            'hintOptions' => ['class' => 'form-text text-muted'],
                            'errorOptions' => ['class' => 'invalid-feedback d-block'],
                        ],
                    ]); ?>
                    <div class="card-header">
                        <div class="fw-semibold">Смена пароля RoFenrir</div>
                        <div class="text-muted small">Пароль используется для входа в игру. Задайте новый и сохраните изменения.</div>
                    </div>
                    <div class="card-body">
                        <?= $form->field($model, 'new_user_pass', [
                            'template' => "{label}\n<div class=\"col-md-8 col-lg-9\"><div class=\"input-group\">{input}<button class=\"btn btn-outline-secondary toggle-password\" type=\"button\" aria-label=\"Показать пароль\" data-target=\"#gameaccount-new_user_pass\">Показать</button><button type=\"submit\" class=\"btn btn-primary\" name=\"signup-button\">Сохранить</button></div>{hint}{error}</div>",
                            'labelOptions' => [
                                'label' => 'Новый пароль',
                            ],
                        ])->passwordInput([
                            'placeholder' => 'Введите новый пароль',
                            'autocomplete' => 'new-password',
                            'maxlength' => true,
                        ])->hint('Используйте не короче 8 символов и сочетайте буквы с цифрами.') ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
        <h2 class="h4 mt-4 mb-3">Персонажи</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm">
                <tr>
                    <th>Имя персонажа</th>
                    <th>Пол</th>
                    <th>Профессия</th>
                    <th>Базовый уровень</th>
                    <th>Джоб уровень</th>
                    <th>Зен</th>
                    <th>Дата последнего входа</th>
                    <th class="text-end">Действия</th>
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
                        <td class="text-end">
                            <button class="btn btn-outline-secondary btn-sm" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#char-<?= $char->char_id ?>-details"
                                    aria-expanded="false"
                                    aria-controls="char-<?= $char->char_id ?>-details">
                                Подробнее
                            </button>
                        </td>
                    </tr>
                    <tr class="collapse bg-light" id="char-<?= $char->char_id ?>-details">
                        <td colspan="8">
                            <div class="row gy-2 align-items-center">
                                <div class="col-md-6">
                                    <div><strong>Текущее место:</strong> <?= $char->last_map ?> (<?= $char->last_x ?>, <?= $char->last_y ?>)</div>
                                    <div class="text-muted small">Последний вход: <?= $char->last_login ?></div>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <div><strong>Точка сохранения:</strong> <?= $char->save_map ?> (<?= $char->save_x ?>, <?= $char->save_y ?>)</div>
                                    <div class="mt-2">
                                        <?= Html::a('Перенести на точку сохранения', ['site/move-char', 'id' => $char->char_id], [
                                            'class' => 'btn btn-warning btn-sm',
                                            'data' => [
                                                'method' => 'post',
                                                'confirm' => 'Перенести персонажа на точку сохранения? Убедитесь, что он офлайн.',
                                            ],
                                        ]) ?>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <? endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?php
$js = <<<JS
jQuery(function ($) {
    $('.toggle-password').on('click', function () {
        var target = $($(this).data('target'));
        var isHidden = target.attr('type') === 'password';
        target.attr('type', isHidden ? 'text' : 'password');

        $(this).text(isHidden ? 'Скрыть' : 'Показать');
        $(this).attr('aria-label', isHidden ? 'Скрыть пароль' : 'Показать пароль');
    });
});
JS;
$this->registerJs($js);
