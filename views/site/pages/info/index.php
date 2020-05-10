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
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Новичку</th>
              <td scope="col"></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"></th>
              <td><a href="rof">Что такое «Ragnarok Online Fenrir»</a></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><a href="boevye-kompanony-i-ezdovye-zveri">Боевые компаньоны и ездовые звери</a></td>
              <td></td>
            </tr>
          </tbody>
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Управление и интерфейсы</th>
              <td scope="col"></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"></th>
              <td><a href="komand">Консольные команды</a></td>
              <td></td>
            </tr>
          </tbody>
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"><a href="job/">Профессии</a></th>
              <td scope="col"></td>
            </tr>
          </thead>
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Корпорация Райс и другие жители Мира Фенрир</th>
              <td scope="col"></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"></th>
              <td><a href="rise/">Корпорация Райс</a></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><a href="rise/profsouz">Профсоюз</a></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><a href="rise/guild">Регистрация гильдий через Корпорацию Райс</a></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row"></th>
              <td><a href="nastavnik">Наставник</a></td>
              <td></td>
            </tr>
          </tbody>
        </table>
    </div>
    <div class="col">
        <div class="bs-component">
            <?= $this->render('_menu') ?>
        </div>
    </div>
</div>