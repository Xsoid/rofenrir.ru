<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<header class="page-header bg-img size-lg" style="background-image: url(/img/bg-banner1.jpg)">
  <div class="container no-shadow">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <p class="lead text-center"></p>
  </div>
</header>

<main>
    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
    </p>

</main>

