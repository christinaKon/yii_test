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
                <ul class="header__menu flex-horisontal">
                    <li><a href="#">Экспертам</a></li>
                    <li><a href="#">Журналистам</a></li>
                    <li><a href="#">Тарифы</a></li>
                    <li><a href="#">Помощь</a></li>
                </ul>
                <div class="header__links flex-horisontal">
                    <a href="#" class="button small green">Начать работу</a>
                    <a href="#" class="button small transparent">Войти</a>
                    <a href="#" class="language ru">RU</a>
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
                    <li class="footer__menu-item"><a href="#">О Нас</a></li>
                    <li class="footer__menu-item"><a href="#">Реклама</a></li>
                    <li class="footer__menu-item"><a href="#">Сервис</a></li>
                    <li class="footer__menu-item"><a href="#">Соглашение</a></li>
                    <li class="footer__menu-item"><a href="#">Контакты</a></li>
                </ul>
                <div class="footer__description">
                    <p>From this moment on, choose not to let your past dictate your future. What is gone is gone – forever. Now is the time to move on, to do and become what you want: to be the best in any area that you choose, so you may design your own destiny.
Here are a few helpful suggestions that you may take on board, and below you will find a couple of simple tips that can quickly move you in the direction of manifesting your destiny to accomplish many great things in your life.</p>
                </div>
                <div class="footer__copyright">
                    <p>Все права защищены. 2017. Deadline.com.ua</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
