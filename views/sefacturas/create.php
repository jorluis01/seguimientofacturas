<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SeFacturas */

$this->title = 'Create Se Facturas';
$this->params['breadcrumbs'][] = ['label' => 'Se Facturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-facturas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
