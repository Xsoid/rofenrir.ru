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
        <h1>Технические особенности сервера</h1>
        <p><span style="font-family: Arial, sans-serif; ">Сервер работает с 25.12.2011</span></p>
        <p>Основан на: rAthena</p>
        <p>Механика:&nbsp;<span style="color: rgb(255, 0, 0); "><strong>Renewal</strong></span><br />
        Мы не будем отступать от выбранного направления основываясь на пожеланиях комьюнити вне зависимости от его количества. Баланс это дела администрации и мы не собираемся никому делегировать эти вопросы. </p>
        <h3 id="reit">Рейты сервера Fenrir</h3>
        <p><strong>Рейты на опыт:&nbsp;</strong>Базовый 15x / Професиональный 15x<br />
        <strong>Рейты дропа обычного лута:&nbsp;</strong>Общий 10x / Исцеляющий&nbsp; 10x&nbsp;/ Полезный 10x / Предметы 10x / Карты 10x<br />
        <strong>Рейты дропа с боcса:</strong>&nbsp;Общий 10x / Исцеляющий 10x / Полезный 10x / Предметы 10x / Карты 10x<br />
        <strong>Прочий:</strong>&nbsp;MvP 10x / На основе карт 10x / Сокровища 10x</p>
        <h3 id="lvl">Максимальный уровень</h3>
        <p>Третьи профы: 175/60</p>
        <h3 id="job">Введены профессии</h3>
        <ul>
            <li>Super Novice / Expanded Super Novice</li>
            <li>Baby</li>
            <li>Advance Job</li>
            <li>3 Job ВСЕ</li>
            <li>Taekwon / Taekwon Master / Soul Linker</li>
            <li>Ninja / Kagerou (Oboro)</li>
            <li>Gunslinger / Rebellion</li>
        </ul>
    </div>
</div>
