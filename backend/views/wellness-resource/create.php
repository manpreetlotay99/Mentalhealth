<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\WellnessResource $model */

$this->title = 'Create Wellness Resource';
$this->params['breadcrumbs'][] = ['label' => 'Wellness Resources', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wellness-resource-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
