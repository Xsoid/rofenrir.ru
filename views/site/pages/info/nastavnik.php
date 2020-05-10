<?php

/* @var $this yii\web\View */

$this->title = 'Наставник';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Наставник, Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Наставник - загадочный дедушка приходит на помощь жителям мира Фенрир в переломные моменты существования этого мира'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = 'Наставник';
?>

<div class="row">
    <div class="col">
        <h1>Наставник</h1>
        <p>Загадочный дедушка приходит на помощь жителям мира Фенрир в переломные моменты существования этого мира. Один из редких жителей которые находятся в нём не постоянно а только по особым ключевым моментам. Ходят слухи что он состоит на службе в компании Райс, но достоверных подтверждений этому нет.</p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('_menu') ?>
        </div>
    </div>
</div>