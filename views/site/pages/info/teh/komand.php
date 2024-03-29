<?php

/* @var $this yii\web\View */

$this->title = 'Консольные команды';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'MMORPG, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'RoFenrir - бесплатный игровой сервер MMORPG. Нет абонентская платы и внутренних покупок. Игра без ограничений. Без вайпов с открытия в 2011 году.'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = 'Управление и интерфейсы';
$this->params['breadcrumbs'][] = 'Консольные команды';
?>

<div class="row">
    <div class="col">
        <h1>Консольные команды</h1>
        <p>Команды набираются прямо в чат и оправляются Enter'ом.<br>
          Знаки < и > служат для обозначения выбираемого параметра и не пишутся, кавычки "" пишутся.</p>
        <h3>Основные команды</h3>
        <p><b>/h</b> или <b>/help</b> — выводит список команд в окне чата</p>
        <h3>Интерфейс</h3>
        <p><b>/showname</b> — переключение режимов отображения имени<br>
          <img class="col" src="/img/content/interface/showname.png"></p>
        <h3>Персонаж</h3>
        <p><b>@bodystyle <0-1></b> — смена спрайта, только для третьих профессий. 0 - классический, 1 - альтернативный спрайт jRO</p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('../_menu') ?>
        </div>
    </div>
</div>