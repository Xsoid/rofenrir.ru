<?php

/* @var $this yii\web\View */

$this->title = 'Корпорация Райс';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Корпорация Райс, Rise Corp, Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Корпорация Райс - (Rise Corp) организация появившаяся в мире Фенрира с целью предоставления услуг которые не могут или не хотят обеспечить другие корпорации.'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = 'Корпорация Райс';
?>

<div class="row">
    <div class="col">
        <h1>Корпорация Райс</h1>
        <p><b>Корпорация Райс</b> - <i>(Rise Corp)</i> организация появившаяся в мире Фенрира с целью предоставления услуг которые не могут или не хотят обеспечить другие корпорации. Возможности компании не ограничены реальностью Рун-Мидгарда и им доступны таинства недоступные его жителям что выгодно отличает данное предприятие.</p>
        <h2>Сервисы корпорации Райс</h2>
        <ul>
            <li>Скупщик - торговый представитель компании Райс занимающейся скупкой и продажей товара по контракту</li>
            <li><a href="profsouz">Профсоюз</a> - получение второй профес</li>
            <li><a href="guild">Регистрация гильдий</a></li>
            <li>Банк Райс</li>
        </ul>
        <h2>Знаки отличия Корпорации Райс</h2>
        <p>Ценные знаки в взаимоотношениях с корпорацией Райс, больше не для чего они не нужны.</p>
        <p><b>Как их можно получить?</b><br>Обращайтесь к сотрудникам корпорации Райс</p>
        <p><b>Где их можно потратить?</b><br>Это не валюта и потратить как обычные деньги их нельзя. Но если вам что то потребуется и вы обратитесь к сотруднику корпорации Райс, очень вероятно что он попросит у вас сколько то знаков отличия за оказание услуги.</p>
        <p><b>Сколько у меня знаков отличия?</b><br>С недавних пор никак, но скоро мы это поправим.</p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('../_menu') ?>
        </div>
    </div>
</div>