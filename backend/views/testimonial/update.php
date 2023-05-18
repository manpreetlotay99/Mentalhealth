<?php

/* @var $this yii\web\View */
/* @var $model common\models\testimonial */

$this->title = 'Update Testimonial: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Testimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="testimonial-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
