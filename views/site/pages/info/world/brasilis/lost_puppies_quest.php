<?php
/* @var $this yii\web\View */
$this->title = 'На поиски щенков!';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Lost Puppies Quest'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = 'Мир';
$this->params['breadcrumbs'][] = ['label' => 'Бразилис', 'url' => ['info/world/brasilis/index']];
$this->params['breadcrumbs'][] = 'На поиски щенков!';
?>

<div class="row">
    <div class="col">
        <h1>На поиски щенков! <small>[Lost Puppies Quest]</small> <span class="badge badge-secondary">Повторяемый</span></h1>
        <p><b>Требуемый уровень:</b> 40<br>
        <b>Награда:</b> 750.000 базового опыта</p>
        <p>1. Поговорите с Анджело [Angelo, 297 307]. Он попросит помочь ему найти сбежавших щенков в полях Бразилиса.</p>
        <p><img src="/img/content/info/world/brasilis/3116c3c1b639.jpg"></p>
        <p>2. Найти нужно трех щенков. Их примерное положение на карте:</p>
        <p><img src="/img/content/info/world/brasilis/523781719650.jpg"></p>
        <p>3. Возвращайтесь к Анджело, он наградит вас опытом.</p>
        <hr>
        <p>Автор: @Vakhet</p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('../../_menu') ?>
        </div>
    </div>
</div>