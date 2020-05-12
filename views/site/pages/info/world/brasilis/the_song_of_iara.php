<?php
/* @var $this yii\web\View */
$this->title = 'Песнь Иары';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'The Song of Iara'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = 'Мир';
$this->params['breadcrumbs'][] = ['label' => 'Бразилис', 'url' => ['info/world/brasilis/index']];
$this->params['breadcrumbs'][] = 'Песнь Иары';
?>

<div class="row">
    <div class="col">
        <h1>Песнь Иары <small>[The Song of Iara]</small> <span class="badge badge-secondary">Повторяемый</span></h1>
        <p>1. Поговорите с Шаманом [shaman, 315 334]. Она пожалуется на то, что некая водяная нимфа крадет молодых мужчин у ее племени. Ей нужно собрать некоторые ингредиенты для лекарства против ее чар.</p>
        <p><img src="/img/content/info/world/brasilis/51ed8bb2712e.jpg"></p>
        <p>20 Heart of Mermaid<br>
        10 Leopard Claw<br>
        3 Ancient Lips</p>
        <p>2. Принесите ей эти предметы, взамен получите 2 Purification Potion (вылечивает 400-600 ХП).</p>
        <p>3. Вооружившись этим лекарством, отправляемся в подземелье Бразилиса, на второй этаж. Разговариваем с Иарой [iara, bra_dun02 157 74], выслушиваем ее песню, которая наделяет нас бонусом +5 ко всем статам на 20 минут, а также +10 Крит на 60 минут.</p>
        <p><img src="/img/content/info/world/brasilis/a356768839b6.jpg"></p>
        <p>Примечание: Если выслушать песню не имея лекарства, получите статус Confusion или Curse на 1 минуту.</p>
        <hr>
        <p>Автор: <a href="http://forum.rofenrir.ru/index.php?/profile/114-vakhet/" target="_metrics">Vakhet</a></p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('../../_menu') ?>
        </div>
    </div>
</div>