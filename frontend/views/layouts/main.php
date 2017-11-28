<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->title = 'Yii2 test-task';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?= $this->registerCssFile('/frontend/web/design/dist/main.css',['depends'=>AppAsset::className()]) ?>
    <?= $this->registerJsFile('/frontend/web/design/dist/main.js',['depends'=>AppAsset::className()]) ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="header">
    <div class="container">
        <div class="row flex-horisontal">
            <div class="col-md-3">
                <div class="header__logo logo">
                    <a href="/"><img src="/frontend/web/design/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-md-9 flex-horisontal">
                <ul class="header__menu main-menu flex-horisontal">
                    <li class="header__menu_item"><a href="#">Экспертам</a></li>
                    <li class="header__menu_item"><a href="#">Журналистам</a></li>
                    <li class="header__menu_item"><a href="#">Тарифы</a></li>
                    <li class="header__menu_item"><a href="#">Помощь</a></li>
                </ul>
                <div class="header__links flex-horisontal">
                    <a href="#" class="button small green">Начать работу</a>
                    <a href="#" class="button small transparent">Войти</a>
                    <a href="#" class="language ru active">RU</a>
                    <span class="separator-vertical"></span>
                    <a href="#" class="language ua">UA</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="wrap">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    </div>
    <?= $content ?>
</div>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="footer__logo logo">
          <a href="/"><img src="/frontend/web/design/logo.png" alt="logo"></a>
        </div>
      </div>
      <div class="col-md-9">
        <ul class="footer__menu">
          <li class="footer__menu-item"><a href="#">Реклама</a></li>
          <li class="footer__menu-item"><a href="#">Соглашение</a></li>
        </ul>
        <div class="footer__description">
          <p>Работа в редакции или ТВ-канале Украины может быть оптимизирована вместе с Deadline, создавать новости можно до 30 раз быстрее. СМИ быстро собирают фактуру для материалов и сюжетов за 2-3 часа, а эксперты получают бесплатные упоминания о себе в печатных или электронных газетах, журналах, блогах, на ТВ-каналах или радио.</p>
        </div>
        <div class="footer__contacts">
          <div class="group-full-width">
            <p>Телефон контакт-центра:</p>
          </div>
          <div class="group-two-column">
            <div class="left">
              <div class="footer__phone">
                <div class="number">
                  <span>+ 38 (044) 220 00 00</span>
                </div>
                <div class="description">
                  <p>(с 9:00 до 18:00, кроме выходных и праздников)</p>
                </div>
              </div>
              <div class="footer__mail">
                <span>contact@deadline.com.ua</span>
              </div>
            </div>
            <div class="right">
              <div class="footer__social">
                <a href="https://www.instagram.com/"></a>
              </div>
              <div class="footer__copyright">
                <div>Все права защищены. 2017. Deadline.com.ua</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
