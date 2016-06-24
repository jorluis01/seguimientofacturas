<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\select2\Select2;
use app\models\SeEps;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SeFacturasSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Se Facturas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-facturas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Se Facturas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_facturas',
            'Nu_facturas',
            //'id_eps',
            [
               'attribute'  =>  'id_eps',
                'value'     =>  'idEps.eps_nombre',
                'format'    =>  'raw',
                'filter'    => Select2::widget([
                                'attribute' => 'id_eps',
                                'value' => 'idEps.eps_nombre',
                                'model' => $searchModel,
                                'data' => ArrayHelper::map(SeEps::find()->all(), 'id_eps', 'eps_nombre'),
                                'options' => [
                                    'multiple' => false,
                                    'placeholder' => 'eps'],
                    
                        'pluginOptions' =>[
                            'allowClear' => true,
                        ]
                    
                    ]),
            ],
            
            
            
            
            'Rips_facturas',
            'Mega_facturas',
            // 'Estado',
            // 'Oficio',
            // 'Redicados',
            // 'fecha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
