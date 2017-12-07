<?php

/* @var $this yii\web\View */

$this->title = 'Profile Media';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-profile-media">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?= $this->render('blocks/sidebarProfile') ?>
        </div>

        <div class="col-md-9">
          <form action="#" class="media wrapper">
            <div class="form-item-wrapper name-of-media">
              <div class="form-item">
                <label class="required" for="name">Название СМИ</label>
                <select class="profile" id="name">
                  <option value=""></option>
                  <option value="">BlaBla</option>
                  <option value="">Lorem</option>
                </select>
              </div>
              <div class="description">
                <p>Начните писать название и выберите свое СМИ из списка</p>
              </div>
            </div>
            <div class="form-item post">
              <label class="required" for="post">Должность</label>
              <input type="text" id="post">
            </div>
            <div class="form-item site">
              <label for="site">Сайт</label>
              <input type="text" id="site">
            </div>
            <div class="form-item town">
              <label class="required" for="town">Город</label>
              <input type="text" id="town">
            </div>
            <?= $this->render('blocks/profileActions') ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
