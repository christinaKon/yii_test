<?php

/* @var $this yii\web\View */

$this->title = 'Journalist requests';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-press-release">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="create-button"><a href="#">Добавить релиз</a></div>
          <aside class="sidebar">
            <div class="all-releases"><a href="#">Все релизы</a></div>
          </aside>
        </div>

        <div class="col-md-9">
          <div class="requests-filter">
            <form action="">
              <input type="search">
            </form>
          </div>

          <?= $this->render('blocks/pressReleaseMessages') ?>
        </div>
      </div>
    </div>
  </div>
</div>
