<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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
</head>
<body>

<?= $this->render('_metrics') ?>

<?php $this->beginBody() ?>

<div class="wrap">

    <?php
    NavBar::begin([
        'brandLabel' => 'Project Fenrir',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная страница', 'url' => ['/ru/index']],
            ['label' => 'О проекте', 'url' => ['/ru/about/index']],
            ['label' => 'Поддержка проекта', 'url' => ['/ru/donate/index']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">
            <a href="/" class="btn btn-link">Сайт</a> 
            <a href="http://www.rofenrir.ru/client" target="_blank" class="btn btn-link">Клиент</a> 
            <a href="http://forum.rofenrir.ru" target="_blank" class="btn btn-link">Форум</a> 
        </p>

        <p class="pull-right">&copy; Project Fenrir <?= date('Y') ?> [18+]</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
