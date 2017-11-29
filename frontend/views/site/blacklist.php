<?php

/* @var $this yii\web\View */

$this->title = 'Blacklist';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-blacklist">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?= $this->render('blocks/sidebarPeople') ?>
        </div>

        <div class="col-md-9">
          <div class="requests-filter">
            <form action="">
              <input type="search" placeholder="Поиск">
            </form>
          </div>

          <?= $this->render('blocks/blacklistPeople') ?>
        </div>
      </div>
    </div>
  </div>
</div>
