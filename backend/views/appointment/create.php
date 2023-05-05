<?php

/* @var $this yii\web\View */
/* @var $model common\models\appointment */

$this->title = 'Create Appointment';
$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointment-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
