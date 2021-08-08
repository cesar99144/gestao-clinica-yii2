<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Agendamentos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agendamentos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigoConsulta')->textInput(['readonly' => true, 'maxlength' => true, 'value' => $codigoConsulta]) ?>

    <?= $form->field($model, 'idPaciente')->widget(Select2::classname(), [
            'data' => $listPacientes,
            'language' => 'de',
            'options' => [],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>
   
    <?= $form->field($model, 'idExame')->widget(Select2::classname(), [
            'data' => $listExames,
            'language' => 'de',
            'options' => [],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'dataAtendimento')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Data de atendimento ...'],
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy/mm/dd'
            ]
        ])
    ?>

    <?= $form->field($model, 'observacao')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
