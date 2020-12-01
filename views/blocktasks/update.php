<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Blocktasks */

$this->title = 'Update Blocktasks: ' . $model->idEntry;
$this->params['breadcrumbs'][] = ['label' => 'Blocktasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEntry, 'url' => ['view', 'id' => $model->idEntry]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blocktasks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
