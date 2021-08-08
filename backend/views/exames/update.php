<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Exames */

$this->title = 'Exame: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Exames', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exames-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
