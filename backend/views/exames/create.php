<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Exames */

$this->title = 'Criar Exames';
$this->params['breadcrumbs'][] = ['label' => 'Exames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exames-create">

    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
