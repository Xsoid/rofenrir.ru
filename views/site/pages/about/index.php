<?php

/* @var $this yii\web\View */

$this->title = 'RO Fenrir - Ragnarok Online Server';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Бесплатный игровой сервер Ragnarok Online. Нет абонентская платы и внутренних покупок. Игра без ограничений. Без вайпов с открытия в 2011 году.'
]);
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="row">
    <div class="col-lg-3">
        <div class="bs-component">
            <?= $this->render('_menu') ?>
        </div>
    </div>
    <div class="col-lg-9">
        <h1>Особенности сервера</h1>
        <ul>
            <li>Никакой платы и внутренних покупок</li>
            <li>Никаких вайпов и откатов</li>
            <li>Хардкорный подход к игровой механике</li>
            <li>Renewal</li>
            <li>Последние непроверенные обновления Ragnarok Online</li>
            <li>Только сбалансированные кастомные дополнения</li>
            <li>Система учётной записей</li>
            <li>Облегченный старт для новичков</li>
            <li>Поощрение регистрации гильдии</li>
            <li>Уникальная система скупки лута у игроков через НПЦ</li>
            <li>У нас на сервере живут Котики</li>
            <li><a href="https://github.com/Fenrir-Game-Project/rAthena-in-Russian" target="_blank">Открытый проект по переводу сервера на Русский</li>
        </ul>
        <p style="text-align: center; "><strong><span style="color: rgb(255, 0, 0); ">Ставятся эксперименты!</span></strong></p>
    </div>
</div>