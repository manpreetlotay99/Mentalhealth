<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\medicalrecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medicalrecords';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medicalrecord-index card">
    <div class="card-header with-border">
        <?= Html::a('Create Medicalrecord', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="card-body table-responsive">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'patient_id',
                'date',
                'past_illnesses',
                'surgeries',
                // 'hospitalisation',
                // 'allergies',
                // 'medications',
                // 'immunizations',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
