<?php

/* @var $this yii\web\View */
/* @var $model common\models\cms */

$this->title = 'Update Cms: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Cms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cms-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
