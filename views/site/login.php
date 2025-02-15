<?php

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Авторизоваться на сайте с помощью социальной сети';
$this->registerMetaTag([
     'name' => 'keywords',
     'content' => 'авторизация, социальные сети, RPG ID, VK ID, Яндекс, Google'
]);
$this->registerMetaTag([
     'name' => 'description',
     'content' => 'Авторизоваться на сайте с помощью социальной сети.'
]);
?>
<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid mt-2">
        <div class="container text-center">
            <p>Авторизуйтесь на сайте в один клик с помощью социальной сети или платформы в которой вы уже зарегистрированы.</p>
            <p>
            <?= Html::a('<i class="fa fa-id-card" aria-hidden="true"></i>', $authUrl, ['class' => 'btn btn-primary btn-lg', 'name' => 'login-button', 'title' => 'Войти через RPG ID']) ?>
            <a href="<?= $authVkId ?>" class="btn btn-primary btn-lg" role="button" aria-disabled="true" title="Авторизация через VK ID"><i class="fab fa-vk" aria-hidden="true"></i></a>
            <a href="<?= $authYandex_oauthUrl ?>" class="btn btn-primary btn-lg" role="button" aria-disabled="true" title="Авторизация через Яндекс"><i class="fab fa-yandex" aria-hidden="true"></i></a>
            <a href="<?= $authGoogle_oauthUrl ?>" class="btn btn-primary btn-lg" role="button" aria-disabled="true" title="Авторизация через Google"><i class="fab fa-google" aria-hidden="true"></i></a>
            </p>
        </div>
    </div>
</div>
