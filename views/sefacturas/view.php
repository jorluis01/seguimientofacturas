<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SeFacturas */

$this->title = $model->id_facturas;
$this->params['breadcrumbs'][] = ['label' => 'Se Facturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-facturas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_facturas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_facturas], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_facturas',
            'Nu_facturas',
            'id_eps',
            'Rips_facturas',
            'Mega_facturas',
            'Estado',
            'Oficio',
            'Redicados',
            'fecha',
        ],
    ]) ?>

</div>
