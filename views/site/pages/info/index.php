<?php

/* @var $this yii\web\View */

$this->title = 'Путиводитель «Ragnarok Online Fenrir»';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'Ragnarok Online, Renewal, Fenrir, RoFenrir, сервер, бесплатная игра'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'RoFenrir - бесплатный игровой сервер Ragnarok Online. Нет абонентская платы и внутренних покупок. Игра без ограничений. Без вайпов с открытия в 2011 году.'
]);
$this->params['breadcrumbs'][] = 'Путиводитель';
?>

<div class="row">
    <div class="col">
        <h1>Путиводитель</h1>
        <ul>
          <li>Расы
            <ul>
            <!--  <li>Люди
                <ul>
                  
                </ul>
              </li>-->
              <li>Doram
                <ul>
                  <li><a href="doram/one">Первый контакт</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="job/">Профессии</a></li>
          <li><a href="boevye-kompanony-i-ezdovye-zveri">Боевые компаньоны и ездовые звери</a></li>
          <li>Корпорация Райс и другие жители Мира Фенрир
            <ul>
              <li><a href="rise/">Корпорация Райс</a></li>
              <li><a href="rise/profsouz">Профсоюз</a></li>
              <li><a href="rise/guild">Регистрация гильдий через Корпорацию Райс</a></li>
              <li><a href="nastavnik">Наставник</a></li>
            </ul>
          </li>
        </ul>
    </div>
    <div class="col">
        <h1>Тех.поддержка</h1>
        <ul>
          <li><a href="rof">Что такое «Ragnarok Online Fenrir»</a></li>
          <li>Управление и интерфейсы
            <ul>
              <li><a href="teh/nav">Навигационная система</a></li>
              <li><a href="teh/komand">Консольные команды</a></li>
            </ul>
          </li>
        </ul>
    
    </div>
    <div class="col">
        <div class="bs-component">
            <?= $this->render('_menu') ?>
        </div>
    </div>
</div>