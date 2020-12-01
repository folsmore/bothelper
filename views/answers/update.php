<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Answers */

$this->title = 'Update Answers: ' . $model->idAnsw;
$this->params['breadcrumbs'][] = ['label' => 'Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAnsw, 'url' => ['view', 'id' => $model->idAnsw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="answers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
