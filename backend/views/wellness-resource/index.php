<?php

use common\models\WellnessResource;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\WellnessResourceSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Wellness Resources';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wellness-resource-index">

   

    <p>
        <?= Html::a('Create Wellness Resource', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="card">
     <div class="card-body login-card-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'resource_type',
            'resource_title',
            'resource_image',
            'resource_category',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, WellnessResource $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

     </div>
    </div>
</div>
