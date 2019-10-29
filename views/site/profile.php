<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Мой профиль | RoFenrir - Ragnarok Online';
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
        <h1>Мой Профиль</h1>
        <table class="table table-bordered table-condensed table-striped">
            <tr>
                <th>E-mail</th>
                <th>Основной</th>
                <th>Подтвержден</th>
            </tr>
            <tr>
                <td><?= $model->email ?></td>
                <td>да</td>
                <td><?= $model->email_checked ? 'да' : 'нет' ?></td>
            </tr>
        <? foreach ($model->emailContacts as $email): ?>
            <tr>
                <td><?= $email->value ?></td>
                <td>нет</td>
                <td><?= $email->confirmed ? 'да' : 'нет' ?></td>
            </tr>
        <? endforeach; ?>
        </table>
        <p>
            <a href="<?= Yii::$app->params['profileUrl'] ?>" class="btn btn-success" target="_blank">Редактировать E-mails</a>
        </p>

        <h2>Игровые аккуанты</h2>
        <table class="table table-bordered table-condensed table-striped">
            <tr>
                <th>Логин</th>
                <th>E-mail</th>
                <th>Пол</th>
                <th>Дата последнего входа</th>
                <th></th>
            </tr>
            <? foreach ($model->gameAccounts as $account): ?>
                <tr>
                    <td><?= $account->userid ?></td>
                    <td><?= $account->email ?></td>
                    <td><?= $account->sex ?></td>
                    <td><?= $account->lastlogin ?></td>
                    <td><a href="<?= Url::to(['/site/account', 'id' => $account->account_id]) ?>">Подробнее</a></td>
                </tr>
            <? endforeach; ?>
        </table>

        <p>
            <a href="<?= Url::to(['/site/create-account']) ?>" class="btn btn-success">Создать аккуант</a>
        </p>
    </div>
</div>
