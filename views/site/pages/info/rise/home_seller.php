<?php

/* @var $this yii\web\View */

$this->title = 'Продавец родины';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Продавец родины, MMORPG, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Продавец родины - барыги которые продают за зени то что в других мирах принято продавать за рубли, доллоры и юани.'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = ['label' => 'Корпорация Райс', 'url' => ['info/rise/index']];
$this->params['breadcrumbs'][] = 'Продавец родины';
?>

<div class="row">
    <div class="col">
        <h1>Продавец родины</h1>
        <p>Связь с корпорацией райс доставерно не установленна. Но учитывая, что их часто видят рядом с диллерами этой корпорации, принято считать что они как то связаны. Продовца родины точно можно найти на "чёрном рынке" слева от Пронтеры и в тех местах где их присутствие наиболе выгодно для торговли.</p>
        <p><img src="/img/content/info/rise/screenFenrir200928.jpg"></p>
        <p>Продавци родины, продают то, что не принято продавать за зени.</p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('../_menu') ?>
        </div>
    </div>
</div>