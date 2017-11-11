<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PaymentPackgages */

$this->title = 'Create Payment Packgages';
$this->params['breadcrumbs'][] = ['label' => 'Payment Packgages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-packgages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
