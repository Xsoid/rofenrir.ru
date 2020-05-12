<?php
/* @var $this yii\web\View */
$this->title = 'Охота на странную гидру';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'strange Hydra Quest'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = 'Мир';
$this->params['breadcrumbs'][] = ['label' => 'Бразилис', 'url' => ['info/world/brasilis/index']];
$this->params['breadcrumbs'][] = 'Охота на странную гидру';
?>

<div class="row">
    <div class="col">
        <h1>Охота на странную гидру <small>[strange Hydra Quest]</small> <span class="badge badge-secondary">Повторяемый</span></h1>
        <p>1. Поговорите с Люсией [Lucia, 192 133], которая поинтересуется, не желаете ли вы поохотиться на странных гидр. Если вы согласитесь, она даст вам Hydra Ball, и расскажет как им пользоваться, чтобы изловить гидру.</p>
        <p><img src="/img/content/info/world/brasilis/9243f27863e8.png"></p>
        <p>Примечание: Вы можете взять несколько шаров, на случай неудачных попыток охоты, - просто скинув на землю имеющиеся шары.</p>
        <p>2. Отправляйтесь на пляж, выбирайте любую гидру и попробуйте ее поймать с помощью шара.</p>
        <p>3. Наконец изловив гидру, возвращайтесь к Люсии. В награду она даст вам <b>3 Light Blue Potion</b>, и наделит бонусом <b>+5 к Декс, Лак и Вит на 20 минут</b>. А также пригласит вас продолжить охоту на следующий день .)</p>
        <hr>
        <p>Автор: <a href="http://forum.rofenrir.ru/index.php?/profile/114-vakhet/" target="_metrics">Vakhet</a></p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('../../_menu') ?>
        </div>
    </div>
</div>