<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Agendamentos */

$this->title = 'Criar Agendamento';
$this->params['breadcrumbs'][] = ['label' => 'Agendamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agendamentos-create">


    <?= $this->render('_form', [
        'model' => $model,
        'listExames' => $listExames,
        'listPacientes' => $listPacientes,
        'codigoConsulta' => $codigoConsulta,
    ]) ?>

</div>
