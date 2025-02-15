<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;
use share\modules\community\models\SiteSettings;

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
    <?/* Фавиконы */?>
    <? $FaviconXIcon = SiteSettings::currentItem('FaviconXIcon'); ?>
    <? if (!empty($FaviconXIcon)): ?>
      <link rel="icon" href="<?= $FaviconXIcon->file_url ?>" type="image/x-icon">
    <? endif; ?>
    <? $FaviconSvg = SiteSettings::currentItem('FaviconSvg'); ?>
    <? if (!empty($FaviconSvg)): ?>
      <link rel="icon" href="<?= $FaviconSvg->file_url ?>" type="image/svg+xml">
    <? endif; ?>
    <? $FaviconApple180 = SiteSettings::currentItem('FaviconApple180'); ?>
    <? if (!empty($FaviconApple180)): ?>
      <link rel="apple-touch-icon" href="<?= $FaviconApple180->file_url ?>" sizes="180x180">
    <? endif; ?>
    <?/* Фавиконы конец */?>
    <?/* Яндекс верификация */?>
    <? $yandexVerification = SiteSettings::currentValue('YandexVerification'); ?>
    <? if (!empty($yandexVerification)): ?>
      <meta name="yandex-verification" content="<?= $yandexVerification ?>" />
    <? endif; ?>
    <?/* Яндекс верификация конец */?>
</head>
<body class="container">

<?/* Яндекс Метрика */?>
<? $YandexMetrika = \share\modules\community\models\SiteSettings::currentValue('YandexMetrika'); ?>
<? if (!empty($YandexMetrika)): ?>
<?= $YandexMetrika ?>
<? endif; ?>
<?/* Яндекс Метрика конец */?>

<?php $this->beginBody() ?>


<div class="alert alert-dark col-12 mt-3" role="alert">
    <div class="row">
        <div class="col-md-2 col-3">
            <a href="/"><img src="/img/fenrir-ak.svg" class="img-fluid" alt="RoFenrir"></a>
        </div>
        <div class="col">
            <h1 class="fs-2">RoFenrir | MMORPG</h1>
            <p class="mb-1">Онлайн <b>N</b> человек</p>
            <? if (Yii::$app->user->isGuest): ?>
            <p><a href="/login" class="btn btn-outline-success">Авторизоваться на сайта</a></p>
            <? else: ?>
            <p><a href="/site/profile">Личный кабинет <?= Yii::$app->user->identity ?></a></p>
            <? endif; ?>
            <p></p>
        </div>
        <div class="col">
            <p><a href="/client">Скачать&nbsp;клиент</a> | <a href="/blog/">Статьи</a> | <a href="/world/char">Жители&nbsp;сервера</a> | <a href="/world/guild">Гильдии</a></p>
            <p><a href="https://discord.gg/uetZrN6Sus" target="_metrics">Сервер Discord</a></p>
        </div>
    </div>
</div>

<?= $this->render('_breadcrumbs') ?>
<?= $content ?>

<footer class="footer">
    <hr>
    <p>Игровой сервер работает с 25.12.2011 без вайпов и продолжительных отключений. &copy; Project Fenrir 2011-<?= date('Y') ?> [18+].</p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
