<?php

/* @var $this yii\web\View */

$this->title = 'RoFenrir - Ragnarok Online Server';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'RoFenrir -  русский экспериментальный сервер Ragnarok Online. Бесплатный: без абонентской платы и внутренних платежей.'
]);
?>
<div class="jumbotron col-12" style="background-image:url(img/character-summoner.jpg);background-position:center;">
    <h1>RoFenrir</h1>
    <p class="lead">Ragnarok Online Server</p>
    <p><a class="btn btn-lg btn-success" href="<?= $authUrl ?>">ВХОД</a></p>
    <p><small>У нас есть котики</small></p>
</div>
<div class="content">
    <div class="row">
        <div class="col">
            <h2>Регистрация</h2>
            <p>Регистрируйся на сайте и создавай учётные записи в игре. Один аккаунт RPG ID управляет несколькими игровыми учётными записями. Количество учётных записей не ограничено.</p>
            <p><a class="btn btn-default" href="<?= $authUrl ?>">Регистрация</a></p>
        </div>
        <div class="col">
            <h2>Скачать клиент</h2>
            <p>Скачай полный игровой клиент Ragnarok Online. Разархивируй куда хочешь и запусти Fenrir.exe</p>
            <p><a class="btn btn-default" href="/client">Скачать клиент</a></p>
        </div>
        <div class="col">
            <h2>Радоваться</h2>
            <p>Наслаждайтесь игрой. Присоединяйтесь к сообществам созданными нашими игроками.</p>
            <p><a class="btn btn-default" href="http://forum.rofenrir.ru">Форум</a> <a class="btn btn-default" href="https://discord.gg/WMNz35A" target="_metrics">Discord</a></p>
        </div>
    </div>
</div>
