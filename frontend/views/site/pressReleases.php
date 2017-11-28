<?php

/* @var $this yii\web\View */

$this->title = 'Press releases';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-press-release">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="create button"><a href="#">Добавить релиз</a></div>
          <aside class="sidebar">
            <ul class="all-releases sidebar__list">
              <li class="sidebar__item active"><a class="active" href="/site/press-releases"><i class="material-icons">import_contacts</i>Все релизы</a></li>
              <li class="sidebar__item active"><a href="#"><i class="material-icons">star</i>Отмеченные</a></li>
            </ul>
          </aside>

          <aside class="sidebar-banner">
            <div class="banner">
              <p>Вы – известный политик, общественный
              деятель, представитель крупной компании,
              холдинга и готовы активно работать со
              СМИ?</p>

              <p>Вы можете вести полноценную
              комментарийную программу с тарифом
              GOLD и без ограничений отвечать на
              вопросы СМИ!</p>

              <p>Управляйте своим успехом: просматривайте
              срочные запросы переписывайтесь,
              отвечайте – становитесь известным!</p>

              <a href="#" class="button green shadow">Перейти на GOLD аккаунт</a>
            </div>
          </aside>
        </div>

        <div class="col-md-9">
          <div class="requests-filter">
            <form action="">
              <input type="search" placeholder="Поиск">
            </form>
          </div>

          <?= $this->render('blocks/pressReleaseMessages') ?>
        </div>
      </div>
    </div>
  </div>

  <?= $this->render('blocks/footerClosed') ?>
</div>
