<?php

/* @var $this yii\web\View */

$this->title = 'Боевые компаньоны и ездовые звери';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Боевые компаньоны и ездовые звери'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = 'Боевые компаньоны и ездовые звери';
?>

<div class="row">
    <div class="col-md-9">
        <h1>Боевые компаньоны и ездовые звери</h1>
        <p>С вводом Renewal и последних игровых обновлений всем профессиям становятся доступны уникальные ездовые животные, значительно увеличивающие скорость и удобство передвижения. Некоторые профессии также приобретут уникальных боевых «компаньонов», верных помощников в битвах.</p>
        <h2>Боевые компаньоны</h2>
        <img src="/img/content/info/mo1.png">
        <h3>Грифон</h3>
        <p>Достигший 3-ей профессии Крестоносец или Паладин взамен стандартного Пеко-Пеко становится гордым обладателем ездового Грифона. Этот боевой компаньон дает своему владельцу все преимущества, доступные Пеко-Пеко (увеличение скорости передвижения, постоянное усиления некоторых умений), а также обладает соответствующим новому статусу внешним видом.</p>
        <h3>Дракон</h3>
        <p>Получив 3-ю профессию, Рыцарь и Командор, смогут выучить соответствующее умение и получить нового боевого компаньона – Дракона. Он позволяет участвовать в сражении сидя на нем верхом и обеспечивает те же преимущества, что и Пеко-Пеко (увеличение скорости передвижения, постоянное усиления некоторых умений). Однако, кроме этого, Дракон также дает вашему персонажу возможность использовать дополнительные боевые умения, значительно усиливая потенциал наездника в битве.</p>
        <h3>Варг</h3>
        <p>Приручить гигантского волка могут достигшие 3-ей профессии Охотники и Снайперы. Это уникальное создание может использоваться в одном из двух режимов — верховом и боевом. Просто оседлав Варга можно стремительно перемещаться по территориям, практически мгновенно покрывая огромные расстояния. А если вам требуется поддержка в бою — выучите связанные с ним дополнительные умения и Варг будет следовать с вами рядом и атаковать врагов.</p>
        <h3>Меха</h3>
        <p>Уникальный боевой механизм, сочетающий в себе механические и магические компоненты, смогут собрать достигшие 3-ей профессии Кузнецы и Оружейники. Изучив необходимые умения, ваш персонаж сможет облачаться в броню, которая не только увеличит скорость, но и добавит персонажу новые устрашающие атакующие, защитные и вспомогательные способности. Меха превращает своего владельца в ходячее оружие разрушения, настоящего титана на поле боя.</p>
        <h2>Ездовые звери</h2>
        <p>Ездовые звери доступны для всех классов персонажей. Внешний вид призванного зверя зависит от профессии персонажа.</p>
        <p>Ездовые звери увеличивают скорость передвижения персонажа в 2 раза. Однако сражаться или использовать умения на них невозможно, чтобы вступить в бой необходимо спешиться.</p>
        <img src="/img/content/info/mo2.png">
        <p>Чтобы призвать ездового зверя или спешиться, нужно использовать специальный предмет (единый для всех профессий) через рюкзак или панель быстрого доступа. Количество вызовов с помощью предмета не ограничено.</p>
        <p>Ездовые звери могут быть призваны во всех зонах (открытые территории и подземелья), в том числе во время «Войны за Империум», значительно расширяя тактические возможности сражений и простор для маневров.</p>
    </div>
    <div class="col-md-3">
        <div class="bs-component">
            <?= $this->render('_menu') ?>
        </div>
    </div>
</div>