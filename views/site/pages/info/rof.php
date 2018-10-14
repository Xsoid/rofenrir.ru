<?php

/* @var $this yii\web\View */

$this->title = 'Что такое «Ragnarok Online Fenrir»';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Что такое «Ragnarok Online Fenrir»'
]);
$this->params['breadcrumbs'][] = ['label' => 'Путиводитель', 'url' => ['info/index']];
$this->params['breadcrumbs'][] = 'Что такое «Рагнарок Онлайн»';
?>

<div class="row">
    <div class="col-md-9">
        <h1>Что такое «Ragnarok Online Fenrir»</h1>
        <table class="table table-striped" style="font-size:1.3rem;">
          <tbody>
            <tr>
              <td><img src="/img/content/info/novice/g_about_01.gif" style="padding-top:1.5rem;"></td>
              <td>
                <h4>Что Такое Рагнарок?</h4>Рагнарок  -  онлайновая ролевая игра, созданная на основе скандинавской мифологии по мотивам комиксов «Рагнарок» южнокорейского писателя Lee Myon-Jin'а. 
                Пользователи могут создавать персонажей и пускаться поодиночке или группами в странствия по огромному интересному миру в поисках приключений.
              </td>
            </tr>
            <tr>
              <td><img src="/img/content/info/novice/g_about_02.gif" style="padding-top:1.5rem;"></td>
              <td>
                <h4>Более 20 различных профессий</h4>Игроки выбирают любой из множества классов, руководствуясь своим стилем игры. Каждая профессия имеет уникальные характеристики и способности. Их сила и слабость, их взаимодействие между собой дают возможность персонажам эффективно дополнять  друг друга в партиях и делают походы разнообразными и интересными.
              </td>
            </tr>
            <tr>
              <td><img src="/img/content/info/novice/g_about_03.gif" style="padding-top:1.5rem;"></td>
              <td>
                <h4>Прекрасная графика и звук</h4>Двухмерные, нарисованные вручную персонажи в стиле аниме гармонично вписываются в реалистичные 3D-пейзажи.<br>Похожая графика использовалась в более ранней игре Acturus, которую компания Gravity подвергла потом детальному усовершенствованию.<br>Огромная коллекция музыкальных тем, звучащих в игре, создавалась компанией TeMP.  Эти мелодии не раздражают и редко надоедают.
              </td>
            </tr>
            <tr>
              <td><img src="/img/content/info/novice/g_about_04.gif" style="padding-top:1.5rem;"></td>
              <td>
                <h4>Удобный интерфейс</h4>Рагнарок имеет очень простой интерфейс. Основное управление в игре осуществляется мышкой. Игроки могут самостоятельно расположить некоторые детали интерфейса так, как им удобнее.
              </td>
            </tr>
            <tr>
              <td><img src="/img/content/info/novice/g_about_05.gif" style="padding-top:1.5rem;"></td>
              <td>
                <h4>rAthena</h4>Эмулятор игрового сервера. Написан на языке Си и распространяющийся в соответствии с лицензией GNU GPL, был основан на eAthena, однако на данный момент различия между rAthena и eAthena весьма велики.<br><a href="https://rathena.org/board/" target="_blank">Сайт rAthena</a>
              </td>
            </tr>
            <tr>
              <td style="text-align:center;"><div style="margin-top:1.5rem;width:160px;height:100px;background-color:#dedede;border-radius:7px;"><img src="/img/content/info/novice/g_about_06.png"></div></td>
              <td>
                <h4>rAthena-in-Russian</h4>Открытый проект по переводу rAthena на русский язык основанный Fenrir Game Project<br><a href="https://github.com/Fenrir-Game-Project/rAthena-in-Russian" target="_blank">Группа rAthena-in-Russian</a>
              </td>
            </tr>
          </tbody>
        </table>
    </div>
    <div class="col-md-3">
        <div class="bs-component">
            <?= $this->render('_menu') ?>
        </div>
    </div>
</div>