<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DaysSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Days';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="days-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Days', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idDay',
            'day',
            'numberBlock',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
