<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Blockmaterials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blockmaterials-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numberBlock')->textInput() ?>

    <?= $form->field($model, 'Content')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
