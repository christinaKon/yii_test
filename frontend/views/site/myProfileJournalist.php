<?php

/* @var $this yii\web\View */

$this->title = 'My profile journalist';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-my-profile-journalist">
  <?= $this->render('blocks/headerClosed') ?>

  <div class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?= $this->render('blocks/sidebarProfile') ?>
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
              </div>
              <div class="my-profile__right_col">
                <div class="my-profile__about_me">
                  <span class="grey-text">Обо Мне</span>
                  <p>Пишу много: от глянцевых историй до отраслевых профессиональных материалов. Сотрудничаю с разными изданиями как независимый журналист.</p>
                </div>
                <div class="my-profile__theme_wrapper">
                  <span class="my-profile__theme">Lorem ipsum.</span>
                  <span class="my-profile__theme">Lorem ipsum.</span>
                  <span class="my-profile__theme">Lorem ipsum.</span>
                  <span class="my-profile__theme">Lorem ipsum.</span>
                  <span class="my-profile__theme">Lorem ipsum.</span>
                  <span class="my-profile__theme">Lorem ipsum.</span>
                  <span class="my-profile__theme">Lorem ipsum.</span>
                  <span class="my-profile__theme">Lorem ipsum.</span>
                  <span class="my-profile__theme">Lorem ipsum.</span>
                  <span class="my-profile__theme">Lorem ipsum.</span>
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
                      <div class="my-profile__block_title">Фабрика новостей</div>
                      <div class="my-profile__block_post">PR-менеджер</div>
                      <div class="grey-text">Санкт-Петербург</div>
                      <div class="my-profile__block_text"><a href="www.nfactory.ru">www.nfactory.ru</a></div>
                    </div>
                  </div>
                  <div class="my-profile__block">
                    <div class="my-profile__block_inner">
                      <div class="my-profile__block_title">Фабрика новостей</div>
                      <div class="my-profile__block_post">PR-менеджер</div>
                      <div class="grey-text">Санкт-Петербург</div>
                      <div class="my-profile__block_text"><a href="www.kelnik.ru">www.kelnik.ru</a></div>
                    </div>
                  </div>
                </div>
                <div class="my-profile__statistic_wrapper">
                  <div class="my-profile__statistic_row">
                    <div class="my-profile__statistic">
                      <div class="grey-text">Мои питчи</div>
                      <div class="my-profile__statistic_number big">8</div>
                    </div>
                    <div class="my-profile__statistic">
                      <div class="grey-text">Конверсия питчей</div>
                      <div class="my-profile__statistic_number small">14</div>
                    </div>
                  </div>
                  <div class="my-profile__statistic_row">
                    <div class="my-profile__statistic">
                      <div class="grey-text">Принятые питчи</div>
                      <div class="my-profile__statistic_number big">50%</div>
                    </div>
                    <div class="my-profile__statistic">
                      <div class="grey-text">Средняя конверсия на сайте</div>
                      <div class="my-profile__statistic_number small">58%</div>
                    </div>
                  </div>
                </div>
                <div class="my-profile__block_wrapper">
                  <div class="my-profile__block">
                    <div class="my-profile__block_inner">
                      <div class="my-profile__block_title">Theproperty.ru</div>
                      <div class="my-profile__block_post">Журналист</div>
                      <div class="grey-text">Санкт-Петербург</div>
                      <div class="my-profile__block_text"><a href="www.theproperty.ru">www.theproperty.ru</a></div>
                      <div class="my-profile__block_status"><i class="material-icons">verified_user</i>Подтверждено</div>
                    </div>
                  </div>
                </div>
                <div class="my-profile__statistic_wrapper">
                  <div class="my-profile__statistic_row requests">
                    <div class="my-profile__statistic">
                      <div class="grey-text">Мои запросы</div>
                      <div class="my-profile__statistic_number big">28</div>
                    </div>
                    <div class="my-profile__statistic">
                      <div class="grey-text">Полученные питчи</div>
                      <div class="my-profile__statistic_number small">19</div>
                    </div>
                  </div>
                  <div class="my-profile__statistic_row requests">
                    <div class="my-profile__statistic">
                      <div class="grey-text">Репосты в соцсетях</div>
                      <div class="my-profile__statistic_number big">41</div>
                    </div>
                    <div class="my-profile__statistic">
                      <div class="grey-text">Мои публикации</div>
                      <div class="my-profile__statistic_number small">30</div>
                    </div>
                  </div>
                  <div class="my-profile__statistic_row requests">
                    <div class="my-profile__statistic">
                      <div class="grey-text">Принятые питчи</div>
                      <div class="my-profile__statistic_number big">12</div>
                    </div>
                  </div>
                </div>
                <div class="my-profile__publication_wrapper">
                  <div class="grey-text">Ссылки на мои публикации</div>
                  <div class="my-profile__publication"><a href="#">Кому выгоден энергоэффективный капремонт (стр.67)</a><a href="#" class="button shadow-white-black">Запрос</a></div>
                  <div class="my-profile__publication"><a href="#">Кому выгоден энергоэффективный капремонт (стр.67)</a><a href="#" class="button shadow-white-black">Запрос</a></div>
                  <div class="my-profile__publication"><a href="#">Кому выгоден энергоэффективный капремонт (стр.67)</a><a href="#" class="button shadow-white-black">Запрос</a></div>
                  <div class="my-profile__publication"><a href="#">Кому выгоден энергоэффективный капремонт (стр.67)</a><a href="#" class="button shadow-white-black">Запрос</a></div>
                  <div class="my-profile__publication"><a href="#">Кому выгоден энергоэффективный капремонт (стр.67)</a><a href="#" class="button shadow-white-black">Запрос</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
