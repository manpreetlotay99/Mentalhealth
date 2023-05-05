<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PatientInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patient Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-info-index card">
    <div class="card-header with-border">
        <?= Html::a('Create Patient Info', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
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
                'fname',
                'lname',
                'email:email',
                'phone',
                // 'gender',
                // 'date_of_birth',
                // 'city',
                // 'state',
                // 'profile_pic',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
