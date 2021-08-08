<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PacientesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pacientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'tipoPessoa') ?>

    <?= $form->field($model, 'cpfCnpj') ?>

    <?= $form->field($model, 'rg') ?>

    <?php // echo $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'cidade') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'logradouro') ?>

    <?php // echo $form->field($model, 'numeroResidencia') ?>

    <?php // echo $form->field($model, 'bairro') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'dataDeNascimento') ?>

    <?php // echo $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'fone') ?>

    <?php // echo $form->field($model, 'peso') ?>

    <?php // echo $form->field($model, 'altura') ?>

    <?php // echo $form->field($model, 'portaAlgumaDoença') ?>

    <?php // echo $form->field($model, 'deficiencia') ?>

    <?php // echo $form->field($model, 'codigoAcesso') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
