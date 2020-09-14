<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
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
        <a class="navbar-brand" href="/">RoFenrir | Ragnarok Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="/client">Клиент</a></li>
      <li class="nav-item"><a class="nav-link" href="/info/">Информация</a></li>
      <li class="nav-item"><a class="nav-link" href="/world/char">Жители</a></li>
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

<div class="alert alert-danger mt-5" role="alert">
  <b>Внимание!</b> Сервер переехал поэтому установка патча <b>RoFenrir-18.06.9</b> обязательна для получения доступа к игровому миру.<br>
  <a href="/client" style="color: #fff;">Скачать её можно с любого удобного хранилища</a>.<br>
  Полной версии клиента пока не перезалили, доступна старая которую необходимо пропатчить, т.к. надеевся в скором времени выложить новую полную версию клиента нового поколения.
</div>

    </div>
</div>

<footer class="footer mt-5">
    <div class="container">
        <p class="pull-left">
            <a href="http://forum.rofenrir.ru" target="_metrics" class="btn btn-link">Форум</a>
            <a href="https://discord.gg/WMNz35A" target="_metrics" class="btn btn-link">Discord</a>
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

        <p class="pull-right">&copy; Project Fenrir 2011-<?= date('Y') ?> [18+]<br>
        &copy; 2002-<?= date('Y') ?> Gravity Co., Ltd.</p>
        <p class="pull-right">Версия клиента: 18.06.9<br>
        Обновление сервера: 14.09.2020</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
