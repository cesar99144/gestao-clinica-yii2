<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pacientes */

$this->title = 'Adicionar pacientes';
$this->params['breadcrumbs'][] = ['label' => 'Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pacientes-create">

    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
