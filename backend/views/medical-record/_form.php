<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\medicalrecord */
/* @var $form yii\bootstrap5\ActiveForm */
?>

<div class="medicalrecord-form card">
    <?php $form = ActiveForm::begin(); ?>
    <div class="card-body table-responsive">

                <?= $form->field($model, 'patient_id')->textInput() ?>

        <?= $form->field($model, 'date')->textInput() ?>

        <?= $form->field($model, 'past_illnesses')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'surgeries')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'hospitalisation')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'allergies')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'medications')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'immunizations')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="card-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>