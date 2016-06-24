<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SeFacturasSeach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="se-facturas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_facturas') ?>

    <?= $form->field($model, 'Nu_facturas') ?>

    <?= $form->field($model, 'id_eps') ?>

    <?= $form->field($model, 'Rips_facturas') ?>

    <?= $form->field($model, 'Mega_facturas') ?>

    <?php // echo $form->field($model, 'Estado') ?>

    <?php // echo $form->field($model, 'Oficio') ?>

    <?php // echo $form->field($model, 'Redicados') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
