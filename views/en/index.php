<?php

/* @var $this yii\web\View */

$this->title = 'RoFenrir - Ragnarok Online Server';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'RoFenrir -  russian experimental server Ragnarok Online. Free: no subscription fees and domestic payments.'
]);
?>
<div class="site-index">

    <div class="jumbotron" style="
        background-image: url(img/character-summoner.jpg);
        background-position: center;
    ">
        <h1>RoFenrir</h1>
        <p class="lead">Ragnarok Online Server</p>
        <p><a class="btn btn-lg btn-success" href="<?= $authUrl ?>">LOGIN</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Registration</h2>
                <p>Регистрируйся на сайте и создавай учётные записи на игровом сервере. Один аккаунт управляет несколькими игровыми учётными записями. Количество учётных записей не ограничено.</p>
                <p><a class="btn btn-default" href="<?= $authUrl ?>">Registration</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Download client</h2>
                <p>Скачай полный игровой клиент Ragnarok Online. Разархивируй куда хочешь и запусти Fenrir.exe</p>
                <p><a class="btn btn-default" href="/client">Download</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heppy</h2>
                <p>Наслаждайтесь игрой. Если возникнут вопросы воспользуйтесь поиском по сайту или задайте вопрос на форуме. Наше доброжелательное сообщество всегда радо помочь новичкам.</p>
                <p><a class="btn btn-default" href="http://forum.rofenrir.ru">Forum</a></p>
            </div>
        </div>

    </div>
</div>