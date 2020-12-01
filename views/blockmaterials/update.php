<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Blockmaterials */

$this->title = 'Update Blockmaterials: ' . $model->idEntry;
$this->params['breadcrumbs'][] = ['label' => 'Blockmaterials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEntry, 'url' => ['view', 'id' => $model->idEntry]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blockmaterials-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
