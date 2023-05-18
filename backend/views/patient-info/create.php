<?php

/* @var $this yii\web\View */
/* @var $model common\models\PatientInfo */

$this->title = 'Create Patient Info';
$this->params['breadcrumbs'][] = ['label' => 'Patient Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-info-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
