<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\WellnessResource $model */

$this->title = 'Update Wellness Resource: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Wellness Resources', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wellness-resource-update">

   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
