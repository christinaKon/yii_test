<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PaymentPackgagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payment Packgages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-packgages-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Payment Packgages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description:ntext',
            'price',
            'photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
