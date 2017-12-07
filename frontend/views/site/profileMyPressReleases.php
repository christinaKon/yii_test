<?php

/* @var $this yii\web\View */

$this->title = 'Profile Press Releases';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-profile-press-releases">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?= $this->render('blocks/sidebarProfile') ?>
        </div>

        <div class="col-md-9">
          <form action="#" class="press-releases form-wrapper">
            <div class="form-item title-of-release">
              <label class="required" for="title">Заголовок пресс-релиза</label>
              <input type="text" id="title">
            </div>
            <div class="form-item link-on-release">
              <label class="required" for="link">Ссылка на пресс-релиз</label>
              <input type="text" id="link">
            </div>
            <?= $this->render('blocks/profileActions') ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
