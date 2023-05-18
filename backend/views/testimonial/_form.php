<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\testimonial */
/* @var $form yii\bootstrap5\ActiveForm */
?>

<div class="testimonial-form card">
    <?php $form = ActiveForm::begin(); ?>
    <div class="card-body table-responsive">

                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'rating')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="card-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>