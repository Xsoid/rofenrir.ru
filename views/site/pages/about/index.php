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
    <div class="col-lg-9">
        <h1>Особенности сервера</h1>
        <ul>
            <li>Никакой платы и внутренних покупок</li>
            <li>Никаких вайпов и откатов</li>
            <li>Последние непроверенные обновления kRO</li>
            <li>Минимальные кастомные дополнения</li>
            <li>Система объединения аккаунтов</li>
            <li>Поощрение регистрации гильдии</li>
        </ul>
        <h1>Помощь проекту</h1>
        <p>Ядро сервером является <a href="https://github.com/rathena/rathena" target="_metrics">rAthena</a>, принимайте активное участие в жизни сообщество, предлагайте обновления и улучшения и они в скоре попадут на сервер.</p>
        <p><a href="https://github.com/Fenrir-Game-Project/rAthena-in-Russian" target="_metrics">Перевод rAthena на Русский язык</a>. Переводите скрипты и добавляйте их в репозиторий.</p>
        <p><a href="https://github.com/Xsoid/ROrussianRE" target="_metrics">Перевод клиента Ragnarok Online на Русский язык</a>. Переводите файлы и добавляйте их в репозиторий.</p>
        <p><a href="/about/donate">Донат</a> - все средства идут оплату сервера и заказ работ для сервера.</p>
    </div>
    <div class="col-lg-3">
        <div class="bs-component">
            <?= $this->render('_menu') ?>
        </div>
    </div>
</div>