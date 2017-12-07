<?php

/* @var $this yii\web\View */

$this->title = 'Profile Experts';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-profile-experts">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?= $this->render('blocks/sidebarProfile') ?>
        </div>

        <div class="col-md-9">
          <form action="#" class="experts about form-wrapper">
            <div class="form-item">
              <div class="description top"><p>После сохранения данных профиль эксперта будет опубликован, и вы начнете представлять этого человека на сайте. Журналисты смогут получить его комментарии, связавшись с вами</p></div>
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
            <div class="form-item">
              <div class="name-of-company">
                <label class="required" for="name-of-company">Название компании</label>
                <input type="text" id="name-of-company">
              </div>
              <div class="post">
                <label class="required" for="post">Должность</label>
                <input type="text" id="post">
              </div>
              <div class="site">
                <label for="site">Сайт</label>
                <input type="text" id="site">
              </div>
              <div class="town">
                <label class="required" for="town">Город</label>
                <input type="text" id="town">
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
