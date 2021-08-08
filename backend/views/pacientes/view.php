<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pacientes */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pacientes-view">

    
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nome',
            'tipoPessoa',
            'cpfCnpj:ntext',
            'rg:ntext',
            'cep',
            'cidade:ntext',
            'estado:ntext',
            'logradouro:ntext',
            'numeroResidencia:ntext',
            'bairro:ntext',
            'sexo:ntext',
            'dataDeNascimento',
            'celular',
            'fone',
            'peso',
            'altura',
            'portaAlgumaDoença:ntext',
            'deficiencia:ntext',
            'codigoAcesso:ntext',
        ],
    ]) ?>

</div>
