<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Blocktasks */

$this->title = 'Create Blocktasks';
$this->params['breadcrumbs'][] = ['label' => 'Blocktasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blocktasks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
