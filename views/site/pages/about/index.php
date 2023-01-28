<?php

/* @var $this yii\web\View */

$this->title = 'Про RoFenrir - Ragnarok Online Server';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Бесплатный игровой сервер Ragnarok Online. Нет абонентская платы и внутренних покупок. Игра без ограничений. Без вайпов с открытия в 2011 году.'
]);
$this->params['breadcrumbs'][] = 'О проекте';
?>
<div class="row">
    <div class="col">
        <div class="row">
            <div class="col-5">
                <h1>Особенности сервера</h1>
                <ul>
                    <li>Никакой платы и внутренних покупок</li>
                    <li>Удалена проверка на VIP, всем доступны все сервисы</li>
                    <li>Вещи, которые на других серверах продают за рубли, у нас продаются за зени или квесты</li>
                    <li>Минимальные кастомные дополнения</li>
                    <li>Система объединения аккаунтов</li>
                    <li>Нет игровых ГМов</li>
                    <li>Никаких вайпов и откатов</li>
                </ul>
                <p>Проект разрабатывается в традициях опенсорс. Никто ничего никому не должен. Если вы хотите, чтобы проект развивался и обрастал фичами, обратите внимание на блок "Помощь проекту".</p>
            </div>
            <div class="col">
                <h1>Помощь проекту</h1>
                <p>Ядром сервера является <a href="https://github.com/rathena/rathena" target="_metrics">rAthena</a>, принимайте активное участие в жизни сообщества, предлагайте обновления и улучшения и они вскоре попадут на сервер.</p>
                <p><a href="https://github.com/Xsoid/rAthena-in-Russian" target="_metrics">Перевод rAthena на Русский язык</a>. Переводите скрипты и добавляйте их в репозиторий.</p>
                <p><a href="https://github.com/Xsoid/ROrussianRE" target="_metrics">Перевод клиента Ragnarok Online на Русский язык</a>. Переводите файлы и добавляйте их в репозиторий.</p>
                <p>У проекта отсутствует лаунчер. Если кто-то возьмёт на себя его разработку и поддержку, пишите на fenrir@rofenrir.ru</p>
                <p>Публичная часть сайта rofenrir.ru доступна для совместного редактирования и расширения на <a href="https://github.com/Xsoid/rofenrir.ru" target="_metrics">GitHub</a>.</p>
                <div class="alert alert-success col-12" role="alert">
                <div class="row">
                    <a type="button" class="btn btn-light col-2 ml-3" href="/about/donate">ДОНАТы</a>
                    <div class="col">Все средства идут на оплату сервера и заказ работ для его улучшения.</div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <h1>Конфигурация сервера</h1>
        <p><span style="font-family: Arial, sans-serif; ">Сервер работает с 25.12.2011</span></p>
        <h3 id="reit">Рейты сервера Fenrir</h3>
        <p><strong>Рейты на опыт:&nbsp;</strong>Базовый 15x / Професиональный 15x<br />
        <strong>Рейты дропа обычного лута:&nbsp;</strong>Общий 10x / Исцеляющий&nbsp; 10x&nbsp;/ Полезный 10x / Предметы 10x / Карты 10x<br />
        <strong>Рейты дропа с боcса:</strong>&nbsp;Общий 10x / Исцеляющий 10x / Полезный 10x / Предметы 10x / Карты 10x<br />
        <strong>Прочий:</strong>&nbsp;MvP 10x / На основе карт 10x / Сокровища 10x</p>
        <h3 id="lvl">Максимальный уровень</h3>
        <p>Третьи профы: 175/70</p>
        <h3 id="job">Введены профессии</h3>
        <ul>
            <li>Super Novice / Expanded Super Novice / Baby</li>
            <li>Advance Job</li>
            <li>3 Job</li>
            <li>Taekwon / Taekwon Master / Soul Linker</li>
            <li>Ninja / Kagerou (Oboro)</li>
            <li>Gunslinger / Rebellion</li>
            <li>Doram (Summoner)</li>
            <li>Класcические и jRo спрайты третих профессий</li>
        </ul>
    </div>
</div>