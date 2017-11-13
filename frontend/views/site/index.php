<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="site-index">

<!--   <div class="jumbotron">
    <h1>Адресная книга</h1>

    <p class="lead">Зарегистрируйтесь чтобы начать работу</p>

    <p><a class="btn btn-lg btn-success" href="/backend/web/login">Или войдите как админ</a></p>
  </div> -->

  <div class="body-content">
    <?= $this->render('blocks/startWork') ?>
    <?= $this->render('blocks/brands') ?>
    <?= $this->render('blocks/forExperts') ?>
    <?= $this->render('blocks/howItWorks') ?>
    <?= $this->render('blocks/clientsReviews') ?>
    <?= $this->render('blocks/findOut') ?>
    <?= $this->render('blocks/help') ?>
    <?= $this->render('blocks/beginWork') ?>
  </div>
</div>


