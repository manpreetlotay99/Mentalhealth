<?php

/* @var $this yii\web\View */
/* @var $model common\models\cms */

$this->title = 'Create Cms';
$this->params['breadcrumbs'][] = ['label' => 'Cms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
