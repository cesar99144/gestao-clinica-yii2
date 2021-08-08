<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pacientes */

$this->title = 'Paciente: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->nome]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pacientes-update">

  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
