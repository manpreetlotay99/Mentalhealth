<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\appointment */
/* @var $form yii\bootstrap5\ActiveForm */
?>

<div class="appointment-form card">
    <?php $form = ActiveForm::begin(); ?>
    <div class="card-body table-responsive">

                <?= $form->field($model, 'patient_id')->textInput() ?>

        <?= $form->field($model, 'doctor_id')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'app_date_time')->textInput() ?>

        <?= $form->field($model, 'app_duration')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'app_status')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'app_note')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="card-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>