<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model common\models\Pacientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pacientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'tipoPessoa')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'cpfCnpj')->textarea(['rows' => 1, 'placeholder' => "Cpf ou cnpj"]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'rg')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'cep')->textInput() ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'cidade')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'estado')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'logradouro')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'numeroResidencia')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'bairro')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-lg-4">
             <?= $form->field($model, 'sexo')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-lg-4">

            <?= $form->field($model, 'dataDeNascimento')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Data de nascimento ...'],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy/mm/dd'
                ]
            ])?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'celular')->textInput() ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'fone')->textInput() ?>
        </div>
        <div class="col-lg-2">
            <?= $form->field($model, 'peso')->textInput() ?>
        </div>
        <div class="col-lg-2">
            <?= $form->field($model, 'altura')->textInput() ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'portaAlgumaDoença')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-lg-4">
             <?= $form->field($model, 'deficiencia')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-lg-6 form-group">
            <div>
                <?= $form->field($model, 'codigoAcesso')->textarea(['rows' => 1]) ?>
            </div>
            <div>
                <!-- <button class="btn btn-primary">Gerar código</button> -->
                <?= Html::a('Gerar código', ['create'], ['class' => 'btn btn-primary']) ?>
            </div>
            
            
        </div>
        
    </div>

    <div class="form-group d-flex justify-content-end">
        <?= Html::resetButton('Cancelar', ['class' => 'btn btn-danger  mt-3']) ?>
        <?= Html::submitButton('Cadastrar', ['class' => 'btn btn-success  mt-3']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
