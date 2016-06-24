<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SeFacturas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="se-facturas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nu_facturas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_eps')->textInput() ?>

    <?= $form->field($model, 'Rips_facturas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mega_facturas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Estado')->textInput() ?>

    <?= $form->field($model, 'Oficio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Redicados')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
