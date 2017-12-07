<?php

/* @var $this yii\web\View */

$this->title = 'Profile Companies';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-profile-companies">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?= $this->render('blocks/sidebarProfile') ?>
        </div>

        <div class="col-md-9">
          <form action="#" class="companies wrapper">
            <div class="form-item-wrapper name-of-company">
              <div class="form-item">
                <label class="required" for="name">Название компании</label>
                <select class="profile" id="name">
                  <option value=""></option>
                  <option value="">BlaBla</option>
                  <option value="">Lorem</option>
                </select>
              </div>
              <div class="description">
                <p>Начните писать название и выберите свою компанию из списка</p>
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
