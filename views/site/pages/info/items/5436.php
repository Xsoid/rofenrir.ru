<?php

/* @var $this yii\web\View */

$this->title = "Bride's Corolla";
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Квестовые предметы, items, Sunglasses, Темные очки'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Гайд по получению красивого свадебного венка в Ragnarok Online.'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = ['label' => 'Квестовые предметы', 'url' => ['info/items/index']];
$this->params['breadcrumbs'][] = "Bride's Corolla";
?>
<div class="row">
    <div class="col">
        <h1>Bride's Corolla <small>Венок невесты</small></h1>
        <p>Красивый свадебный венок с шелковой лентой.<br>
        Удача + 3, Магическая защита + 2</p>
        <p>Класс: Головной убор<br>
        Защита: 1<br>
        Вес: 20<br>
        Требуемый уровень: 0<br>
        Профессии: Все</p>
        <p><img src="/img/content/info/items/3df28134f7c0.png"></p>
        <p><b>Требуемый лут:</b></p>
        <p>Maneater Blossom (ID=1032) 1000 шт.<br>
        Silk Ribbon (ID=10007) 1 шт.<br>
        5 000 зени</p>
        <p>1. В деревне орков, в доме, где находится вход на второй уровень орочьего подземелья, найдите орочью женщину.</p>
        <p><img src="/img/content/info/items/74926a9d8d44.png"><br>
        <i>gef_fild10 223,225 -> in_orcs01; Orc Lady in_orcs01 119,106</i></p>
        <p>2. Пройдите в одной-двух клетках от неё, и выскочит диалог от вашего имени:</p>
        <p><img src="/img/content/info/items/3fcecfc3a4e5.png"></p>
        <p>Пока вы будете думать, заговорить ли с ней, она вас заметит и выронит от удивления цветок. Помогите ей:</p>
        <p><img src="/img/content/info/items/b0bf11ff1933.png"></p>
        <p>Она представится, будьте вежливы и поинтересуйтесь, чем она занята:</p>
        <p><img src="/img/content/info/items/b16a77743546.png"></p>
        <p>Она ответит, что делает венки. Попросите её сделать вам тоже. Она скажет, какой лут принести, или, если он у вас уже с собой, просто сделает венок.</p>
        <hr>
        <p>Автор: @Akaineko</p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('../_menu') ?>
        </div>
    </div>
</div>