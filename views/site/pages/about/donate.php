<?php

/* @var $this yii\web\View */

$this->title = 'Поддержка проекта - RoFenrir';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'MMORPG, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Проект RoFenrir существует только на добравольные пожертвования.'
]);
//$this->params['breadcrumbs'][] = ['label' => 'О проекте', 'url' => ['/about/index']];
$this->params['breadcrumbs'][] = 'Поддержка проекта';
?>
<div>
    <h1>Поддержка проекта</h1>
    <p>Проект полностью некоммерческий. Никакой абонентской платы или внутренних покупок. Оказанная материальная поддержка идет на развитие проекта.  Принимаются только добровольные пожертвования от лиц, которым небезразличен наш общий мир.</p>
    <iframe src="https://yoomoney.ru/quickpay/shop-widget?writer=buyer&targets=&targets-hint=&default-sum=&button-text=11&payment-type-choice=on&fio=on&mail=on&hint=&successURL=https%3A%2F%2Frofenrir.ru%2Fabout%2Fdonate&quickpay=shop&account=41001537616041" width="423" height="215" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
    <p>Спасибо за вашу поддержку.</p>
    <p>При возникновении вопросов связаться с администрацией можно по электронной почте fenrir@rofenrir.ru</p>
</div>
<?= $this->render('_gratitude') ?>
