<?php

use yii\helpers\Html;
//use yii\bootstrap5\ActiveForm;
use kartik\editors\Summernote;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\cms */
/* @var $form yii\bootstrap5\ActiveForm */
?>

<div class="cms-form card">
    <?php $form = ActiveForm::begin(); ?>
    <div class="card-body table-responsive">

                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'url_key')->textInput(['maxlength' => true]) ?>

       
        <?php echo $form->field($model, 'description')->widget(Summernote::class, [
    'useKrajeePresets' => true,
            'pluginOptions'=>['dialogsInBody' => true]
    // other widget settings
]); ?>
        <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'meta_keyword')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="card-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>