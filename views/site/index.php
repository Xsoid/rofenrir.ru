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
<div class="jumbotron col-12 p-5" style="background-image:url(img/character-summoner.jpg);background-position:center;">
    <h1 class="mt-0">RoFenrir</h1>
    <p class="lead">Ragnarok Online Server</p>
    <p><a class="btn btn-success btn-lg" style="font-size: 32px;" href="<?= $authUrl ?>">ВХОД</a><p>
    <p><a href="<?= $authVkontakteUrl ?>" class="btn btn-success" title="Авторизация через VK"><i class="fab fa-vk" aria-hidden="true"></i></a> 
        <a href="<?= $authYandex_oauthUrl ?>" class="btn btn-success" title="Авторизация через Яндекс"><i class="fab fa-yandex" aria-hidden="true"></i></a> 
        <a href="<?= $authGoogle_oauthUrl ?>" class="btn btn-success" title="Авторизация через Google"><i class="fab fa-google" aria-hidden="true"></i></a></p>
    <p><small>У нас есть котики</small></p>
</div>
<div class="content">
    <div class="row">
        <div class="col">
            <h2>Регистрация</h2>
            <p>Регистрируйся на сайте и создавай учётные записи в игре. Один аккаунт RPG ID управляет несколькими игровыми учётными записями. Количество учётных записей не ограничено.</p>
            <p><a class="btn btn-default" href="<?= $authUrl ?>">Регистрация</a> 
            <a href="<?= $authVkontakteUrl ?>" class="btn btn-default" title="Быстрая регистрация через VK"><i class="fab fa-vk" aria-hidden="true"></i></a> 
            <a href="<?= $authYandex_oauthUrl ?>" class="btn btn-default" title="Быстрая регистрация через Яндекс"><i class="fab fa-yandex" aria-hidden="true"></i></a> 
            <a href="<?= $authGoogle_oauthUrl ?>" class="btn btn-default" title="Быстрая регистрация через Google"><i class="fab fa-google" aria-hidden="true"></i></a></p>
        </div>
        <div class="col">
            <h2>Скачать клиент</h2>
            <p>Скачай полный игровой клиент Ragnarok Online. Разархивируй куда хочешь и запусти Fenrir.exe</p>
            <p><a class="btn btn-default" href="/client">Скачать клиент</a></p>
        </div>
        <div class="col">
            <h2>Радоваться</h2>
            <p>Наслаждайтесь игрой. Присоединяйтесь к сообществам созданными нашими игроками.</p>
            <p><a class="btn btn-default" href="https://discord.gg/uetZrN6Sus" target="_metrics">Discord</a></p>
        </div>
        <div class="col-12">
            <p><small>* Для быстрой регистрации можете воспользоваться любимой соц.сетью и авторизовываться через неё.<br>
            ** В настройках профиля можно привязать к учетной записи все доступные соц.сети и автризовываться через любую из них.</small></p>
        </div>
    </div>
</div>
