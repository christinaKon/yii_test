<?php

/* @var $this yii\web\View */

$this->title = 'Help';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-questions-answers">
  <div class="body-content">
    <h1 class="container h1">Вопросы и ответы</h1>

    <?= $this->render('blocks/primaryTabs') ?>

    <div class="container">
      <div class="row">
        <div class="col-md-1"></div>

        <aside class="col-md-3 left-sidebar">
          <?= $this->render('blocks/questionsBar') ?>
        </aside>

        <section class="col-md-7 content">
          <?= $this->render('blocks/questionsAnswers') ?>
        </section>

        <div class="col-md-1"></div>
      </div>
    </div>

    <?= $this->render('blocks/beginWork') ?>

  </div>
</div>
