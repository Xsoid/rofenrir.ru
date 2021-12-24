<?php

/* @var $this yii\web\View */

$this->title = 'Система учёток RoFenrir';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Навигационная система в Ragnarok Online'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = 'Система учёток RoFenrir';
?>

<div class="row">
    <div class="col">
        <h1>Система учёток RoFenrir</h1>
        <p>Учётная запись ROFenrir это профиль игрока. Она может содержать персональную информацию, которую вы пожелаете указать, и является обьединяющим звеном для игровых аккаунтов. Иметь общую учётку удобно тем, что именно через неё происходят настройки персонажей и аккаунтов: регистрация аккаунта, смена пароля, перенос и удаление персонажей и т.д.</p>
        <p class="h3">Регистрация</p>
        <p>1. На странице https://rofenrir.ru/ нажмите кнопку <b>"Регистрация"</b> или <b>"Войти"</b></p>
        <p class="text-center"><img class="border border-dark" src="/img/content/info/teh/reg/reg-02.png"></p>
        <p>2. Вас телепортирует на сайт RPG ID. Выберите ваш вариант (войти, забыл пароль или регистрация), введите основной e-mail и желаемый пароль.<br>
        Технически, учётка создана.<br>
        3. Вы будете перенаправлены в профиль учётки. В поле "Дополнительные e-mail" укажите все адреса, которые вы когда-либо использовали и собираетесь использовать для аккаунтов RoFenrir.</p>
        <p class="text-center"><img class="border border-dark" src="/img/content/info/teh/reg/reg-03.png"><br>
        <i>(!) На одно мыло может быть зарегистрировано несколько аккаунтов.</i></p>
        <p>4. Проверьте почту и подтвердите все эти мыла, включая основной.</p>
        <p class="text-center"><img class="border border-dark" src="/img/content/info/teh/reg/reg-02.5.png"></p>
        <p>5. Теперь вы можете авторизоваться на сайте https://rofenrir.ru/profile ! ^^</p>
        <p class="h3">Использование учётки</p>
        <p class="h5">Создание новых игровых аккаунтов</p>
        <p>Игровой аккаунт, в отличие от глобальной учётной записи -- это аккаунт, который вы будете использовать для входа в игру. У него есть свой логин, свой пароль, на одном аккаунте 12 персонажей, вот это всё.</p>
        <p>1. Авторизуйтесь на сайте https://rofenrir.ru/profile и нажмите кнопоку "Создать аккаунт"</p>
        <p class="text-center"><img class="border border-dark" src="/img/content/info/teh/reg/reg-04.png"></p>
        <p>2. Выберите e-mail, к которому будет привязан аккаунт, его логин и пароль.</p>
        <p class="text-center"><img class="border border-dark" src="/img/content/info/teh/reg/reg-05.png"></p>
        <p><b>Всё, можно играть.</b></p>
        <hr>
        <p>Статья написана @Akaineko</p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('../_menu') ?>
        </div>
    </div>
</div>