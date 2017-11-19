<?php

/* @var $this yii\web\View */

$this->title = 'Expert requests';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-expert-requests">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?= $this->render('blocks/expertsBar') ?>
        </div>

        <div class="col-md-9">
          <div class="requests-filter">
            <form action="">
              <input type="search">
              <select name="industries" id="industries">
                <option value="">Все отрасли</option>
                <option value="">Lorem</option>
              </select>
              <select name="towns" id="towns">
                <option value="">Все города</option>
                <option value="">Луцк</option>
              </select>
            </form>
          </div>

          <div class="requests-top-bar">
            <h3>Срочные запросы</h3>
            <div class="answers-archive"><a href="#">Архив ответов</a></div>
          </div>

          <?= $this->render('blocks/messages') ?>
        </div>
      </div>
    </div>
  </div>
</div>
