<?php

/* @var $this yii\web\View */

$this->title = 'Sunglasses [1]';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Квестовые предметы, items, Sunglasses, Темные очки'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Гайд по получению Тёмных очков со слоотм, для игры Ragnarok Online.'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = ['label' => 'Квестовые предметы', 'url' => ['info/items/index']];
$this->params['breadcrumbs'][] = 'Sunglasses [1]';
?>
<div class="row">
    <div class="col">
        <h1>Sunglasses [1] <small>Темные очки [1]</small></h1>
        <p><b>Необходимый лут:</b></p>
        <p>1x Sunglasses<br>
        1x 1carat Diamond<br>
        50x Feather<br>
        500.000 зени</p>
        <p>1. В Альберте найдите продавца солнцезащитных очков [sunglasses Trader, 88 193]. Он расскажет что знает человека, который умеет слотить солнцезащитные очки. В обмен на информацию он потребует 1carat diamond, 50 feather и 100.000 зени. Получив плату, он расскажет как найти Мазефа.</p>
        <p><img src="/img/content/info/items/c55b830597b2.jpg"></p>
        <p>2. Мазеф [Maseph] находится к северу от Моррока. Дайте ему обычные солнцезащитные очки плату в 400.000 зени, и он с удовольствием прослотит их.</p>
        <p><img src="/img/content/info/items/484aef91139f.jpg"></p>
        <hr>
        <p>Автор: <a href="http://forum.rofenrir.ru/index.php?/profile/114-vakhet/" target="_metrics">Vakhet</a></p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('../_menu') ?>
        </div>
    </div>
</div>