<?php

/* @var $this yii\web\View */
/* @var $model common\models\medicalrecord */

$this->title = 'Create Medicalrecord';
$this->params['breadcrumbs'][] = ['label' => 'Medicalrecords', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medicalrecord-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
