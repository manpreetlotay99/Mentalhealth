<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PatientInfo */
/* @var $form yii\bootstrap5\ActiveForm */
?>

<div class="patient-info-form card">
    <?php $form = ActiveForm::begin(); ?>
    <div class="card-body table-responsive">

                <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'date_of_birth')->textInput() ?>

        <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'profile_pic')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="card-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>