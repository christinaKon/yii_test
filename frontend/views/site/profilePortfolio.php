<?php

/* @var $this yii\web\View */

$this->title = 'Profile Portfolio';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-profile-portfolio">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?= $this->render('blocks/sidebarProfile') ?>
        </div>

        <div class="col-md-9">
          <form action="#" class="portfolio wrapper">
            <div class="form-item title-of-publication">
              <label class="required" for="title">Заголовок публикации</label>
              <input type="text" id="title">
            </div>
            <div class="form-item link-on-publication">
              <label class="required" for="link">Ссылка на публикацию</label>
              <input type="text" id="link">
            </div>
            <?= $this->render('blocks/profileActions') ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
