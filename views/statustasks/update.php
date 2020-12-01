<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Statustasks */

$this->title = 'Update Statustasks: ' . $model->idEntry;
$this->params['breadcrumbs'][] = ['label' => 'Statustasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEntry, 'url' => ['view', 'id' => $model->idEntry]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="statustasks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
