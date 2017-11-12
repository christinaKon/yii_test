<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<?= $this->render('about') ?>

<div class="site-index">

  <div class="jumbotron">
    <h1>Адресная книга</h1>

    <p class="lead">Зарегистрируйтесь чтобы начать работу</p>

    <p><a class="btn btn-lg btn-success" href="/backend/web/login">Или войдите как админ</a></p>
  </div>

  <div class="body-content">
    <div class="start-work">
      <div class="start-work__wrapper container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <div class="start-work__description">
              <p>Первый в Украине сервис журналистских запросов</p>
            </div>
            <h2>Помогаем журналистам быстро получать фактуру для статей. <br> А экспертам и пиарщикам — упоминания в СМИ</h2>
            <a href="#" class="button green">Начать работу</a>
          </div>
          <div class="col-md-6"><img src="/frontend/web/design/img/4-layers.png" alt=""></div>
        </div>
      </div>
    </div>

    <div class="statistic">
      <div class="statistic__wrapper container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-4">
                <div class="statistic__cell">
                  <p>статей и передач<br>вышло с 2014 года</p>
                  <span class="statistic__count">35000</span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="statistic__cell">
                  <p>редакций пользуются,<br>примерно 1/3 СМИ страны</p>
                  <span class="statistic__count">3200</span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="statistic__cell">
                  <p>журналистских запросов<br>публикуется в месяц</p>
                  <span class="statistic__count">1500</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>

    <div class="brands">
      <div class="brands__wrapper container">
        <div class="slider">
          <div class="views-row"><img src="/frontend/web/design//img/bitmap1.png" alt=""></div>
          <div class="views-row"><img src="/frontend/web/design//img/bitmap2.png" alt=""></div>
          <div class="views-row"><img src="/frontend/web/design//img/bitmap3.png" alt=""></div>
          <div class="views-row"><img src="/frontend/web/design//img/bitmap4.png" alt=""></div>
          <div class="views-row"><img src="/frontend/web/design//img/bitmap5.png" alt=""></div>
          <div class="views-row"><img src="/frontend/web/design//img/bitmap1.png" alt=""></div>
          <div class="views-row"><img src="/frontend/web/design//img/bitmap2.png" alt=""></div>
          <div class="views-row"><img src="/frontend/web/design//img/bitmap3.png" alt=""></div>
          <div class="views-row"><img src="/frontend/web/design//img/bitmap4.png" alt=""></div>
          <div class="views-row"><img src="/frontend/web/design//img/bitmap5.png" alt=""></div>
        </div>
      </div>
    </div>

    <div class="for-experts">
      <div class="for-experts__wrapper container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5 for-experts__element">
            <div class="for-experts__element-inner for-experts__first">
              <i class="icon"></i>
              <span class="for-experts__for">для журналистов</span>
              <p class="for-experts__description">70% времени при написании заметки — это сбор материала. Занимайтесь текстами.</p>
              <div class="for-experts__link"><a href="#">Как это работает для журналистов?</a></div>
            </div>
          </div>
          <div class="col-md-5 for-experts__element">
            <div class="for-experts__element-inner for-experts__last">
              <i class="icon"></i>
              <span class="for-experts__for">для экспертов</span>
              <p class="for-experts__description">70% времени при написании заметки — это сбор материала. Deadline автоматизирует рутину.</p>
              <div class="for-experts__link"><a href="#">Как это работает для экспертов?</a></div>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>

    <div class="how-it-works">
      <div class="how-it-works__wrapper container">
        <h2>Как это работает</h2>
        <div class="slider">
          <div class="views-row">
            <div class="views-row__inner">
              <div class="how-it-works__left">
                <div class="how-it-works__left-first how-it-works__left-item">
                  <p>Журналисты оставляют запросы</p>
                </div>
                <div class="how-it-works__left-second how-it-works__left-item">
                  <p>Эксперты в ответ на запросы присылают комментарии</p>
                </div>
              </div>
              <div class="how-it-works__center"><img src="/frontend/web/design//img/ipad.png" alt=""></div>
              <div class="how-it-works__right">
                <div class="how-it-works__right-first how-it-works__right-item">
                  <p>Если надо, детали уточняются в чате</p>
                </div>
                <div class="how-it-works__right-second how-it-works__right-item">
                  <p>Эксперты в ответ на запросы присылают комментарии</p>
                </div>
              </div>
            </div>
          </div>
          <div class="views-row">
            <div class="views-row__inner">
              <div class="how-it-works__left">
                <div class="how-it-works__left-first how-it-works__left-item">
                  <p>Журналисты оставляют запросы</p>
                </div>
                <div class="how-it-works__left-second how-it-works__left-item">
                  <p>Эксперты в ответ на запросы присылают комментарии</p>
                </div>
              </div>
              <div class="how-it-works__center"><img src="/frontend/web/design//img/ipad.png" alt=""></div>
              <div class="how-it-works__right">
                <div class="how-it-works__right-first how-it-works__right-item">
                  <p>Если надо, детали уточняются в чате</p>
                </div>
                <div class="how-it-works__right-second how-it-works__right-item">
                  <p>Эксперты в ответ на запросы присылают комментарии</p>
                </div>
              </div>
            </div>
          </div>
          <div class="views-row">
            <div class="views-row__inner">
              <div class="how-it-works__left">
                <div class="how-it-works__left-first how-it-works__left-item">
                  <p>Журналисты оставляют запросы</p>
                </div>
                <div class="how-it-works__left-second how-it-works__left-item">
                  <p>Эксперты в ответ на запросы присылают комментарии</p>
                </div>
              </div>
              <div class="how-it-works__center"><img src="/frontend/web/design//img/ipad.png" alt=""></div>
              <div class="how-it-works__right">
                <div class="how-it-works__right-first how-it-works__right-item">
                  <p>Если надо, детали уточняются в чате</p>
                </div>
                <div class="how-it-works__right-second how-it-works__right-item">
                  <p>Эксперты в ответ на запросы присылают комментарии</p>
                </div>
              </div>
            </div>
          </div>
          <div class="views-row">
            <div class="views-row__inner">
              <div class="how-it-works__left">
                <div class="how-it-works__left-first how-it-works__left-item">
                  <p>Журналисты оставляют запросы</p>
                </div>
                <div class="how-it-works__left-second how-it-works__left-item">
                  <p>Эксперты в ответ на запросы присылают комментарии</p>
                </div>
              </div>
              <div class="how-it-works__center"><img src="/frontend/web/design//img/ipad.png" alt=""></div>
              <div class="how-it-works__right">
                <div class="how-it-works__right-first how-it-works__right-item">
                  <p>Если надо, детали уточняются в чате</p>
                </div>
                <div class="how-it-works__right-second how-it-works__right-item">
                  <p>Эксперты в ответ на запросы присылают комментарии</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="clients-reviews">
      <div class="clients-reviews__wrapper container">
        <h2>Отзывы экспертов</h2>
        <div class="slider">
          <div class="views-wrapper">
            <div class="views-wrapper-inner">
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client1.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Вера Черенёва<span class='clients-reviews__title_small'>Российская газета</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">«Deadline» позволяет в очень ограниченное время собрать много комментариев экспертов. Конечно, комментарии можно взять и традиционным.</div>
              </div>
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client2.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Наталья Яркова<span class='clients-reviews__title_small'>Агентство PR Partner</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">С помощью «Deadline» можно достаточно быстро получить публикации в СМИ (как правило, в формате экспертных комментариев).</div>
              </div>
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client3.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Борис Кулябин<span class='clients-reviews__title_small'>Пиар-агентство «Первый ход»</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">Самое большое достижение одного моего клиента, бизнес-тренера: с помощью «Deadline» удалось организовать 64 появления.</div>
              </div>
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client4.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Алексей Синяков<span class='clients-reviews__title_small'>Телерадиокомпания «Мир»</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">Для меня самое удобное в «Deadline» — это возможность задать вопросы сразу нескольким экспертам одновременно.</div>
              </div>
            </div>
          </div>
          <div class="views-wrapper">
            <div class="views-wrapper-inner">
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client1.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Вера Черенёва<span class='clients-reviews__title_small'>Российская газета</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">«Deadline» позволяет в очень ограниченное время собрать много комментариев экспертов. Конечно, комментарии можно взять и традиционным.</div>
              </div>
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client2.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Наталья Яркова<span class='clients-reviews__title_small'>Агентство PR Partner</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">С помощью «Deadline» можно достаточно быстро получить публикации в СМИ (как правило, в формате экспертных комментариев).</div>
              </div>
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client3.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Борис Кулябин<span class='clients-reviews__title_small'>Пиар-агентство «Первый ход»</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">Самое большое достижение одного моего клиента, бизнес-тренера: с помощью «Deadline» удалось организовать 64 появления.</div>
              </div>
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client4.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Алексей Синяков<span class='clients-reviews__title_small'>Телерадиокомпания «Мир»</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">Для меня самое удобное в «Deadline» — это возможность задать вопросы сразу нескольким экспертам одновременно.</div>
              </div>
            </div>
          </div>
          <div class="views-wrapper">
            <div class="views-wrapper-inner">
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client1.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Вера Черенёва<span class='clients-reviews__title_small'>Российская газета</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">«Deadline» позволяет в очень ограниченное время собрать много комментариев экспертов. Конечно, комментарии можно взять и традиционным.</div>
              </div>
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client2.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Наталья Яркова<span class='clients-reviews__title_small'>Агентство PR Partner</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">С помощью «Deadline» можно достаточно быстро получить публикации в СМИ (как правило, в формате экспертных комментариев).</div>
              </div>
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client3.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Борис Кулябин<span class='clients-reviews__title_small'>Пиар-агентство «Первый ход»</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">Самое большое достижение одного моего клиента, бизнес-тренера: с помощью «Deadline» удалось организовать 64 появления.</div>
              </div>
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client4.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Алексей Синяков<span class='clients-reviews__title_small'>Телерадиокомпания «Мир»</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">Для меня самое удобное в «Deadline» — это возможность задать вопросы сразу нескольким экспертам одновременно.</div>
              </div>
            </div>
          </div>
          <div class="views-wrapper">
            <div class="views-wrapper-inner">
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client1.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Вера Черенёва<span class='clients-reviews__title_small'>Российская газета</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">«Deadline» позволяет в очень ограниченное время собрать много комментариев экспертов. Конечно, комментарии можно взять и традиционным.</div>
              </div>
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client2.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Наталья Яркова<span class='clients-reviews__title_small'>Агентство PR Partner</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">С помощью «Deadline» можно достаточно быстро получить публикации в СМИ (как правило, в формате экспертных комментариев).</div>
              </div>
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client3.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Борис Кулябин<span class='clients-reviews__title_small'>Пиар-агентство «Первый ход»</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">Самое большое достижение одного моего клиента, бизнес-тренера: с помощью «Deadline» удалось организовать 64 появления.</div>
              </div>
              <div class="views-row">
                <div class="clients-reviews__image"><img src="/frontend/web/design//img/client4.png" alt=""></div>
                <div class="clients-reviews__title">
                  <h3>
                    Алексей Синяков<span class='clients-reviews__title_small'>Телерадиокомпания «Мир»</span>
                  </h3>
                </div>
                <div class="clients-reviews__description">Для меня самое удобное в «Deadline» — это возможность задать вопросы сразу нескольким экспертам одновременно.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="find-out">
      <div class="find-out__wrapper container">
        <h2 class="big">Как узнать еще больше</h2>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-4 find-out__column find-out__column_left">
            <div class="find-out__element">
              <h4>Сколько это стоит?</h4>
              <p>Бесплатно. Хотя для экспертов у нас есть и платные профессиональные тарифы, расширяющие базовый функционал сервиса. Для СМИ сервис всегда и полностью бесплатен.</p>
            </div>
            <div class="find-out__element">
              <h4>Я не журналист и не пиарщик, могу я использовать ваш сервис?</h4>
              <p>Если вы эксперт в какой-то области и способны компетентно отвечать на вопросы журналистов, то почему нет, можете!</p>
            </div>
            <div class="find-out__element">
              <h4>Я — эксперт. Какой результат я получу, работая с Deadline?</h4>
              <p>В среднем в публикацию превращается каждый второй отклик на запрос журналиста (вот что значит работа под запрос!). Если ваша личная результативность окажется не хуже этого среднего уровня, то отвечая хотя бы на 1 запрос в день, вы получите порядка 10 публикаций в месяц. Неплохо!</p>
            </div>
          </div>
          <div class="col-md-4 find-out__column find-out__column_right">
            <div class="find-out__element">
              <h4>А можно не публиковать запрос, искать экспертов самостоятельно?</h4>
              <p>Да. На Deadline зарегистрировано около 30 тыс. экспертов, представляющих самые разные рынки, отрасли, регионы, сферы деятельности. Просто наберите в поиске нужную вам тему и связывайтесь с подходящими экспертами с помощью чатов.</p>
            </div>
            <div class="find-out__element">
              <h4>Могу ли я выступать в роли и эксперта, и журналиста?</h4>
              <p>Да. Вы можете использовать Deadline и как эксперт, и как журналист. После регистрации укажите в личном кабинете ваши роли, а также добавьте компании, или СМИ, которые представляете. Теперь вы можете и публиковать медиазапросы и отвечать на запросы журналистов.</p>
            </div>
            <div class="find-out__element">
              <h4>Сколько журналистов используют Deadline?</h4>
              <p>Сегодня Deadline используют более 5 000 журналистов и 3 000 СМИ. Это около трети всех реально действующих в Украине редакций.</p>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>

    <div class="help">
      <div class="help__wrapper container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5 help__element help__element_left">
            <div class="help__icon"><i></i></div>
            <div class="help__right">
              <div class="help__title">
                <span class="help__with">Быстрая помощь</span>
              </div>
              <div class="help__description">
                <p>Мы всегда поможем с любым затруднением. Как при использовании сервиса, так и в работе со СМИ.</p>
              </div>
            </div>
          </div>
          <div class="col-md-5 help__element help__element_right">
            <div class="help__icon"><i></i></div>
            <div class="help__right">
              <div class="help__title">
                <span class="help__with">Документ онлайн</span>
              </div>
              <div class="help__description">
                <p>Вы можете скачать документ с инструкциями и ознакомиться с ним оффлайн</p>
              </div>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>

    <div class="begin-work">
      <div class="begin-work__wrapper container">
        <div class="begin-work__title">
          <h2 class="big">Начните работать незамедлительно!</h2>
        </div>
        <div class="begin-work__button"><a href="#" class="button green">Начать работу</a></div>
      </div>
    </div>
  </div>
</div>


