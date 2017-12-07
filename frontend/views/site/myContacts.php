<?php

/* @var $this yii\web\View */

$this->title = 'My contacts';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-my-contacts">
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

          <div class="requests-top-bar__people">
            <ul>
              <li><a href="#" class="experts status transparent smaller">Эксперты<span class="number">(6)</span></a></li>
              <li><a href="#" class="journalists status transparent smaller">Журналисты<span class="number">(7)</span></a></li>
            </ul>
          </div>

          <?= $this->render('blocks/contactsPeople') ?>
        </div>
      </div>
    </div>
  </div>
</div>
