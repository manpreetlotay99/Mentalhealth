<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PatientInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Patient Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-info-view card">
    <div class="card-header">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
    <div class="card-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'fname',
                'lname',
                'email:email',
                'phone',
                'gender',
                'date_of_birth',
                'city',
                'state',
                'profile_pic',
            ],
        ]) ?>
    </div>
</div>
