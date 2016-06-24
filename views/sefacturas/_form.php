<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\SeEps;
use yii\helpers\ArrayHelper;
use kartik\daterange\DateRangePicker;
/* @var $this yii\web\View */
/* @var $model app\models\SeFacturas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="se-facturas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nu_facturas')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'id_eps')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(SeEps::find()->all(), 'id_eps', 'eps_nombre'),
                'language' => 'es',
                'options' => ['placeholder' => 'seleccione eps'],
                'pluginOptions' => [
                    'allowClear' => true
    ],
])




//$form->field($model, 'id_eps')->textInput() ?>

    <?= $form->field($model, 'Rips_facturas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mega_facturas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Estado')->textInput() ?>

    <?= $form->field($model, 'Oficio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Redicados')->textInput(['maxlength' => true]) ?>

    <?= DateRangePicker::widget([
            'model'=>$model,
            'attribute'=>'fecha',
            'convertFormat'=>true,
            'pluginOptions'=>[
                'timePicker'=>true,
                'timePickerIncrement'=>30,
                'format'=>'Y-m-d h:i A',
                'singleDatePicker'=>true,
                 'showDropdowns'=>true,
    ]
])
            
            
            //$form->field($model, 'fecha')->textInput() ?>

    <div class="form-group">
        <p></p>
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
