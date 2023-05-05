<?php

/* @var $this yii\web\View */
/* @var $model common\models\appointment */

$this->title = 'Update Appointment: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appointment-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
