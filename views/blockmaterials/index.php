<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlockmaterialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blockmaterials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blockmaterials-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Blockmaterials', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idEntry',
            'numberBlock',
            'Content',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
