<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\medicalrecordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medicalrecord-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'past_illnesses') ?>

    <?= $form->field($model, 'surgeries') ?>

    <?php // echo $form->field($model, 'hospitalisation') ?>

    <?php // echo $form->field($model, 'allergies') ?>

    <?php // echo $form->field($model, 'medications') ?>

    <?php // echo $form->field($model, 'immunizations') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
