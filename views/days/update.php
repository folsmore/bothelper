<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Days */

$this->title = 'Update Days: ' . $model->idDay;
$this->params['breadcrumbs'][] = ['label' => 'Days', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDay, 'url' => ['view', 'id' => $model->idDay]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="days-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
