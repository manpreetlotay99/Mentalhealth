<?php

/* @var $this yii\web\View */
/* @var $model common\models\PatientInfo */

$this->title = 'Update Patient Info: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Patient Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="patient-info-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
