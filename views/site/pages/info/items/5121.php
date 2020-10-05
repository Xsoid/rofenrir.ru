<?php

/* @var $this yii\web\View */

$this->title = "Zealotus Mask";
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Квестовые предметы, items, Zealotus Mask, Маска Зилотус'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Гайд по получению Маски Зилотуса.'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = ['label' => 'Квестовые предметы', 'url' => ['info/items/index']];
$this->params['breadcrumbs'][] = "Zealotus Mask";
?>
<div class="row">
    <div class="col">
        <h1>Zealotus Mask <small>Маска Зилотус</small></h1>
        <p><img class="img-fluid" src="/img/content/info/items/cover_zealotus_mask.jpg"></a></p>
        <p>Маска Зилотус, повелительницы подземной тюрьмы Гластхейма. В ней чувствуешь себя сильнее других людей.<br>
        Увеличение на 5% урона по человекоподобным монстрам<br>
        Класс: Головной убор Защита: 3<br>
        Расположение: Голова, глаза Вес: 40<br>
        Требуемый уровень: 70<br>
        Квалификация: Все профессии, кроме Новичков</p>
        <p>Первым делом летим в Comodo (cmd_in01 128 165).<br>
        Покупаем у НПЦ Whip.</p>
        <p><b>Загатавливаем заранее лут:</b></p>
        <p><b>Dark Crystal Fragment (369)</b> из Obsidian (ein_dun02)<br>
        <b>Cat_s Eye (1)</b> из Civil Servant (lou_dun03)<br>
        <b>Forbidden Red Candle (1)</b> из Injustice (gl_prison 01)<br>
        <b>Worn-out Magic Scroll (30)</b> из Elder (tha_t04) (tha_t05) (tha_t06)</p>
        <p>Летим  (gl_prison1 137, 138)<br>
        Разговариваем с Zealotus, нажимаем [Oh, your highness!], [Yes, it_s so true!].</p>
        <p>Идёте (gl_prison1 97 , 104)<br>
        Разговариваем с Phendark. Приносим ему оружие, которое покупали в Comodo.</p>
        <p>Идём (gl_prison1 100, 48)<br>
        Разговариваем с Rybio, нажимаем [Talk about Phendark.].</p>
        <p>Идём (gl_prison1 97 , 104)<br>
        Для него приносим Dark Crystal Fragment (369).Выбираем [Feed him Dark Crystal Fragment.].</p>
        <p>Идём (gl_prison1 100, 48)<br>
        Разговариваем с Rybio.</p>
        <p>Идём (gl_prison1 97, 104)<br>
        Разговариваем с Phendark , нажимаем [Zealotus], [hates], [Injustice.], [Insult him.], [Break his pride.], [Go for the low blow.].</p>
        <p>Идём (gl_prison1 137, 138)<br>
        <b>Стаём:</b><br>
        Cat_s Eye (1)<br>
        Forbidden Red Candle (1)<br>
        Worn-out Magic Scroll (30)<br>
        <br>
        Разговариваем с Zealotus, нажимаем [Complete the contract.].</p>
        <p>На этом квест готов, поздравляю, вы получаете Zherlthsh Mask!</p>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="bs-component">
            <?= $this->render('../_menu') ?>
        </div>
    </div>
</div>