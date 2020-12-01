<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Blockmaterials */

$this->title = 'Create Blockmaterials';
$this->params['breadcrumbs'][] = ['label' => 'Blockmaterials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blockmaterials-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
