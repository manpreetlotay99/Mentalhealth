<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\WellnessResource $model */
/** @var yii\widgets\ActiveForm $form */
?>
 <div class="card">
    <div class="card-body login-card-body">
<div class="wellness-resource-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'resource_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resource_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resource_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resource_category')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
    </div>
</div>
