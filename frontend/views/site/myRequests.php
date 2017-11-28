<?php

/* @var $this yii\web\View */

$this->title = 'My requests';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-journalist-requests">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="create request button"><a href="#">Создать запрос</a></div>
          <?= $this->render('blocks/journalistsBar') ?>
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

          <div class="requests-top-bar"></div>

          <?= $this->render('blocks/messages') ?>
        </div>
      </div>
    </div>
  </div>

  <?= $this->render('blocks/footerClosed') ?>
</div>
