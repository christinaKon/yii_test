<?php

/* @var $this yii\web\View */

$this->title = 'To journalists';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-to-journalists">
  <div class="body-content">
    <?= $this->render('blocks/beginWorkFor') ?>
    <?= $this->render('blocks/howItWorks') ?>
    <?= $this->render('blocks/whatDoesDeadlineGive') ?>
    <?= $this->render('blocks/findOut') ?>
    <?= $this->render('blocks/help') ?>
    <?= $this->render('blocks/beginWork') ?>
  </div>
</div>
