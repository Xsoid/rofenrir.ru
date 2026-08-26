<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;
use share\modules\community\models\SiteSettings;
use share\modules\community\models\AuthSettings;
use app\models\Char;

$onlineCount = (int) Char::find()
    ->where(['online' => 1])
    ->count();

AppAsset::register($this);
$authSettings = AuthSettings::current();
$authDisabled = $authSettings && $authSettings->disabled;

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


<div class="alert alert-warning border border-warning shadow-sm mt-3" role="alert">
    <div class="row align-items-center gy-3">
        <div class="col-3 col-md-2">
            <a href="/"><img src="/img/fenrir-ak.svg" class="img-fluid" alt="RoFenrir"></a>
        </div>
        <div class="col">
            <h1 class="fs-2 mb-2">RoFenrir | MMORPG</h1>
            <p class="mb-1">Сейчас онлайн: <b><?= $onlineCount ?></b></p>
            <? if (Yii::$app->user->isGuest): ?>
              <? if (!$authDisabled): ?>
              <p class="mb-0"><a href="/login" class="btn btn-outline-dark btn-sm">Войти на сайт</a></p>
              <? endif; ?>
            <? else: ?>
            <p class="mb-0"><a href="/site/profile">Личный кабинет <?= Yii::$app->user->identity ?></a></p>
            <? endif; ?>
        </div>
        <div class="col-12 col-md-auto ms-md-auto text-md-end">
            <p class="mb-1"><a href="/client">Скачать клиент</a> | <a href="/blog/">Статьи</a> | <a href="/world/char">Жители сервера</a> | <a href="/world/guild">Гильдии</a></p>
            <p class="mb-0"><a href="https://discord.gg/uetZrN6Sus" target="_metrics">Сервер Discord</a> 
            <? if (Yii::$app->user->isGuest): ?>
            <? else: ?>
            | <a href="/about/donate">Поддержка проекта</a>
            <? endif; ?>
            </p>
        </div>
        <div class="col-12">
            <div class="alert alert-warning bg-warning border-0 text-body p-3 mb-0 small d-flex align-items-start rounded-3 shadow-sm">
                <span class="badge bg-dark text-warning rounded-circle me-2">!</span>
                <div>
                    <div class="fw-bold text-uppercase small mb-1">Внимание</div>
                    <div class="mb-0">Сервер содержит большое количество ошибок и не имеет команды которая их на данный момент готова исправлять. Если вас это не пугает — милости просим. Если вы не готовы мириться или бороться с ошибками на сервере, приходите через год, проверить изменилась ли ситуация.</div>
                </div>
            </div>
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
