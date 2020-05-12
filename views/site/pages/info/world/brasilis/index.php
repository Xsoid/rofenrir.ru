<?php
/* @var $this yii\web\View */
$this->title = 'Бразилис';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Остров Бразилис открыт мореплавателем Верасс, сплошь покрыт буйной тропической растительностью.'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = 'Мир';
$this->params['breadcrumbs'][] = 'Бразилис';
?>
<div class="row">
    <div class="col">
        <h1>Бразилис <small>[brasilis]</small></h1>
        <p><img src="/img/content/info/world/brasilis/9165cf4603d0.jpg"></p>
        <p>Остров Бразилис открыт мореплавателем Верасс [Verass], сплошь покрыт буйной тропической растительностью. Растительная и животная жизнь невероятно разнообразна, что привлекает многих ученых-биологов и, конечно же, туристов со всех уголков Рун-Мидгарта. Но несмотря на всю его красоту, местные жители живут в страхе перед тайнами и загадками этого острова.</p>
        <p>Существует легенда о женщине по имени Иара [iara], погибшей в Великом Водопаде. Ее тело превратилось в русалку, соблазняющую местных мужчин одного за другим, которых вскоре так и не находят. Жители города утверждают, что это всего лишь страшная сказка для запугивания детей, тем не менее они не могут не задаваться вопросом - есть ли в этой истории доля правды. Местные законы предписывают молодым парам оставаться в пределах города, т.к. слухи гласят что даже маленькие мальчики не защищены он ночных кошмаров острова.</p>
        <p>Чтобы отправиться в Бразилис, приключенцы могут обратиться к членам экипажей кораблей, швартующихся в Альберте (верхний пирс, 247 115).</p>
        <p><b>Интересные места</b></p>
        <ul>
            <li>Представитель корпорации Кафра [197 213]</li>
            <li>Гостиница [274 151]</li>
        </ul>
        <p><b>Квесты</b></p>
        <ul>
            <li><a href="dungeon_entrance_quest">Квест на вход в подземелье Бразилиса</a></li>
            <li><a href="water_lily_quest">История о Водяной Лилии Бразилиса</a></li>
            <li><a href="guarana_quest">Квест на получение Гуарановой Конфеты</a></li>
            <li><a href="strange_hydra_quest">Охота на странную гидру</a> <span class="badge badge-secondary">Повторяемый</span></li>
            <li><a href="the_song_of_iara">Песнь Иары</a> <span class="badge badge-secondary">Повторяемый</span></li>
            <li><a href="lost_puppies_quest">На поиски щенков!</a> <span class="badge badge-secondary">Повторяемый</span></li>
        </ul>
        <hr>
        <p>Автор: <a href="http://forum.rofenrir.ru/index.php?/profile/114-vakhet/" target="_metrics">Vakhet</a></p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('../../_menu') ?>
        </div>
    </div>
</div>