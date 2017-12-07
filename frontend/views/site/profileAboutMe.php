<?php

/* @var $this yii\web\View */

$this->title = 'Profile about-me';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-profile-about-me">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?= $this->render('blocks/sidebarProfile') ?>
        </div>
        <div class="col-md-9">
          <form action="#" class="about-me about form-wrapper">
            <div class="form-item-wrapper status-wrapper">
              <div class="form-item status" id="status">
                <div class="title"><label for="status" class="required">Статус на сайте</label></div>
                <input type="checkbox" id="expert">
                <label for="expert">Эксперт</label>
                <input type="checkbox" id="journalist">
                <label for="journalist">Журналист</label>
              </div>
              <div class="description right-top">
                <p>Журналисты публикуют запросы. Эксперты — отвечают на них, а еще — выпускают релизы. Можно выбрать оба статуса — но придется указать и СМИ, и компанию.</p>
              </div>
            </div>
            <div class="form-item-wrapper">
              <div class="form-item">
                <div class="name">
                  <label class="required" for="name">Имя</label>
                  <input type="text" id="name">
                </div>
                <div class="surname">
                  <label class="required" for="surname">Фамилия</label>
                  <input type="text" id="surname">
                </div>
              </div>
              <div class="upload-photo">
                <img src="/frontend/web/design/img/userpic.png" alt="">
                <input type="file" class="upload">
              </div>
            </div>
            <div class="form-item-wrapper">
              <div class="form-item about-me">
                <label for="about-me">Обо Мне</label>
                <textarea maxlength="400" id="about-me"></textarea>
              </div>
              <div class="description">
                <p>Опишите кратко, чем вы занимаетесь, какие у вас профессиональные интересы.</p>
                <p>400 знаков или меньше.</p>
              </div>
            </div>
            <div class="my-themes-wrapper">
              <label for="themes">Мои темы</label>
              <div class="my-themes" id="themes">
                <span class="add-theme"><i class="material-icons">add_circle</i></span>
              </div>
            </div>
            <?= $this->render('blocks/profileActions') ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
