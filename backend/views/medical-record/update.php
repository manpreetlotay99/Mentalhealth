<?php

/* @var $this yii\web\View */
/* @var $model common\models\medicalrecord */

$this->title = 'Update Medicalrecord: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Medicalrecords', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medicalrecord-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
