<?php
/* @var $this yii\web\View */
$this->title = 'Квест на вход в подземелье Бразилиса';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Brasilis Dungeon Entrance Quest'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = 'Мир';
$this->params['breadcrumbs'][] = ['label' => 'Бразилис', 'url' => ['info/world/brasilis/index']];
$this->params['breadcrumbs'][] = 'Квест на вход в подземелье Бразилиса';
?>

<div class="row">
    <div class="col">
        <h1>Квест на вход в подземелье Бразилиса <small>[brasilis Dungeon Entrance Quest]</small></h1>
        <p><b>Требование</b>: Базовый уровень 40<br>
        <b>Предметы</b>: 1 Coconut [11515]<br>
        <b>Награда</b>: 90.000 базовый опыт, доступ в подземелье Бразилиса.</p>
        <p>1. Поговорите с детьми возле монумента в центре Бразилиса [181 250]. Они расскажут о привидении в туалете местного музея. Говорите с ними, пока не узнаете о "заклинании" для призыва привидения.</p>
        <p><img src="/img/content/info/world/brasilis/08a41095b9ee.jpg"></p>
        <p>2. Купите кокос [Coconut] у торговца фруктами [Fruit Gardener, 221 128].</p>
        <p><img src="/img/content/info/world/brasilis/8f6922df4add.jpg"></p>
        <p><b>Примечание:</b> Лучше купить несколько штук, т.к. результат 9-го шага определяется случайным образом.</p>
        <p>3. Отправляйтесь в музей [148 160]. Зайдя внутрь, идите прямо пока не встретите хранителя музея [Curator, bra_in01 9 181] рядом с туалетом. Он не пропускает внутрь, ссылаясь на ремонт. Говорите с ним, пока он не пожелает чего-нибудь освежающего. Дайте ему кокос, и он пропустит вас.</p>
        <p><img src="/img/content/info/world/brasilis/400f4eeb8e4d.jpg"></p>
        <p>4. В туалете, вам надо будет осмотреть пять предметов. Дверь - унитаз - раковина - ковер - зеркало.</p>
        <p>5. Осмотрите дверь. Со словами "Mother the door won't open!" поверните ключ [turn the key] семь раз.</p>
        <p>6. Осмотрите унитаз. Со словами "Mother the water is flooding!" спустите воду [flush the toilet] три раза.</p>
        <p>7. Осмотрите раковину. Со словами "Mother the drought has started!" откройте кран один раз (второй вариант ответа).</p>
        <p>8. Осмотрите ковер. Со словами "Mother where are my friends?" встряхните ковер семь раз.</p>
        <p>9. Загляните в зеркало. Произнесите "Where are you mom?". Позади вас проявится привидение. Снимите повязку с ее глаз [take off the bandage].</p>
        <p><b>Примечание:</b> Над вашими с привидением головами возникнет игральный кубик. Если ваше число меньше, привидение снимет с вас половину HP и SP и выкинет из туалета. Числа выбираются случайным образом, в случае провала повторите шаги 3-9.</p>
        <p>10. Вы обнаружите себя в канализационной трубе. Идите вперед, пока не увидите люк [Open Manhole], осмотрите его. Снова появится привидение и поведает свою историю. Открыв люк, вы окажетесь в подземелье Бразилиса [bra_dun01].</p>
        <p>11. Теперь вы можете свободно проходить в подземелье через музейный туалет, смываясь через унитаз (п. 6) .)</p>
        <hr>
        <p>Автор: <a href="http://forum.rofenrir.ru/index.php?/profile/114-vakhet/" target="_metrics">Vakhet</a></p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('../../_menu') ?>
        </div>
    </div>
</div>