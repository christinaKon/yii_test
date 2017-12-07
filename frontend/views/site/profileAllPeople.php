<?php

/* @var $this yii\web\View */

$this->title = 'My profile all people';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-profile-all-people">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?= $this->render('blocks/sidebarProfilePeople') ?>
        </div>
        <div class="col-md-9">
          <div class="my-profile__wrapper">
            <div class="my-profile">
              <div class="my-profile__left_col">
                <div class="my-profile__avatar"><img src="/frontend/web/design/img/userpic.png" alt="Avatar"></div>
                <div class="my-profile__prof"><span class="grey-text">Эксперт/Журналист</span></div>
                <div class="my-profile__name">Wayne Reynolds</div>
                <div class="my-profile__town"><span class="grey-text">Санкт-Петербург</span></div>
                <div class="my-profile__likes"><i class="material-icons">thumb_up</i><span class="count">11</span></div>
                <div class="my-profile__buttons">
                  <div class="my-profile__buttons_write"><a class="button" href="#">Написать</a></div>
                  <div class="people__add"><a class="transparent smaller">Добавить<i class="material-icons">arrow_drop_down</i></a>
                    <ul class="people__add-list">
                      <li class="add-to-contacts">Добавить в контакты</li>
                      <li class="add-to-blacklist">Добавить в черный список</li>
                      <li class="add-to-group">Добавить в группу</li>
                      <li class="create-a-group">Создать группу</li>
                      <li class="name-of-group">Название группы</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="my-profile__right_col">
                <div class="my-profile__about_me">
                  <span class="grey-text">Обо Мне</span>
                  <p>Пишу много: от глянцевых историй до отраслевых профессиональных материалов. Сотрудничаю с разными изданиями как независимый журналист.</p>
                </div>
                <div class="my-profile__block_wrapper">
                  <div class="grey-text">Мои компании</div>
                  <div class="my-profile__block">
                    <div class="my-profile__block_inner">
                      <div class="my-profile__block_title">PLANOPLAN</div>
                      <div class="my-profile__block_post">PR-менеджер</div>
                      <div class="grey-text">Санкт-Петербург</div>
                      <div class="my-profile__block_text"><a href="www.planoplan.com">www.planoplan.com</a></div>
                    </div>
                  </div>
                  <div class="my-profile__block">
                    <div class="my-profile__block_inner">
                      <div class="my-profile__block_title"></div>
                      <div class="my-profile__block_post">PR-менеджер</div>
                      <div class="grey-text">Санкт-Петербург</div>
                      <div class="my-profile__block_text"><a href="www.nfactory.ru">www.nfactory.ru</a></div>
                    </div>
                  </div>
                  <div class="my-profile__block">
                    <div class="my-profile__block_inner">
                      <div class="my-profile__block_title"></div>
                      <div class="my-profile__block_post">PR-менеджер</div>
                      <div class="grey-text">Санкт-Петербург</div>
                      <div class="my-profile__block_text"><a href="www.kelnik.ru">www.kelnik.ru</a></div>
                    </div>
                  </div>
                </div>
                <div class="my-profile__statistic_wrapper">
                  <div class="grey-text">Мои СМИ</div>
                  <div class="my-profile__statistic_row">
                    <div class="my-profile__statistic">
                      <div class="grey-text">Мои питчи</div>
                      <div class="my-profile__statistic_number big">8</div>
                    </div>
                    <div class="my-profile__statistic">
                      <div class="grey-text">Конверсия питчей</div>
                      <div class="my-profile__statistic_number big">50%</div>
                    </div>
                  </div>
                  <div class="my-profile__statistic_row">
                    <div class="my-profile__statistic">
                      <div class="grey-text">Принятые питчи</div>
                      <div class="my-profile__statistic_number small">14</div>
                    </div>
                    <div class="my-profile__statistic">
                      <div class="grey-text">Средняя конверсия на сайте</div>
                      <div class="my-profile__statistic_number small">58%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
