<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Мой профиль | RoFenrir';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'MMORPG, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'RoFenrir -  русский экспериментальный сервер MMORPG. Бесплатный: без абонентской платы и внутренних платежей.'
]);
?>
<div class="site-index">
    <div class="body-content">
        <h2 style="float:left;">Аккаунт RPGID</h2>
        <?= Html::beginForm(['/site/logout'], 'post', ['style'=>'float:right;'])
                    . Html::submitButton(
                        'Разлогиниться <i class="fas fa-sign-out-alt" aria-hidden="true"></i>',
                        ['class' => 'btn btn-outline-secondary mb-2']
                    )
                    . Html::endForm();
                ?>
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
            <a href="<?= Yii::$app->params['profileUrl'] ?>" class="btn btn-outline-success mb-2" target="_blank">Управлять аккаунтом RPGID</a>
        </p>

        <h2>Аккаунты RoFenrir</h2>
        <table class="table table-bordered table-condensed table-striped">
            <tr>
                <th>Логин</th>
                <th>E-mail</th>
                <th>Дата последнего входа</th>
                <th></th>
            </tr>
            <? foreach ($model->gameAccounts as $account): ?>
                <tr>
                    <td><?= $account->userid ?></td>
                    <td><?= $account->email ?></td>
                    <td><?= $account->lastlogin ?></td>
                    <td><a href="<?= Url::to(['/site/account', 'id' => $account->account_id]) ?>">Подробнее</a></td>
                </tr>
            <? endforeach; ?>
        </table>

        <p>
            <a href="<?= Url::to(['/site/create-account']) ?>" class="btn btn-outline-success">Создать игровой аккуант</a>
        </p>
    </div>
</div>
