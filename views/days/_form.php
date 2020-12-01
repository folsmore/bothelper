<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Days */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="days-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'day')->textInput() ?>

    <?= $form->field($model, 'numberBlock')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
