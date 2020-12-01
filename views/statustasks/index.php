<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StatustasksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Statustasks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statustasks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Statustasks', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idEntry',
            'day',
            'userr',
            'Success',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
