<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="yandex-verification" content="e047231694d9491d" />
</head>
<body>

<?= $this->render('_metrics') ?>

<?php $this->beginBody() ?>

<div class="wrap">
    <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-default bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">RoFenrir | MMORPG</a>
            <div id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item"><a class="nav-link" href="/client">Клиент</a></li>
                  <li class="nav-item"><a class="nav-link" href="/info/">Информация</a></li>
                  <li class="nav-item"><a class="nav-link" href="/blog/">Статьи</a></li>
                  <li class="nav-item"><a class="nav-link" href="/world/char">Жители</a></li>
                  <li class="nav-item"><a class="nav-link" href="/world/guild">Гильдии</a></li>
                  <li class="nav-item"><a class="nav-link" href="/about/">О проекте</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>

    <? /* <div class="alert alert-danger mt-5" role="alert">
      <b>Внимание!</b> Сервер переехал поэтому если вы не можете подключиться, установите крайний патч <b>RoFenrir-18.06.10</b>.<br>
      <a href="/client" style="color: #fff;">Скачать её можно с любого удобного хранилища</a>.
    </div> */ ?>

    </div>
</div>

<footer class="footer mt-5">
    <div class="container">
        <p class="pull-left">
            <a href="https://discord.gg/uetZrN6Sus" target="_metrics" class="btn btn-link">Discord</a>
            <a href="/about/donate" class="btn btn-link">Поддержка</a>
            <? if (!Yii::$app->user->isGuest): ?>
                <a href="/profile" class="btn btn-link">Профиль</a>
                <?= Html::beginForm(['/site/logout'], 'post', ['style'=>'float:left;'])
                    . Html::submitButton(
                        'Выйти',
                        ['class' => 'btn btn-link']
                    )
                    . Html::endForm();
                ?>
            <? endif; ?>
        </p>

        <p class="pull-right">&copy; Project Fenrir 2011-<?= date('Y') ?> [18+]</p>
        <p class="pull-right"></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
