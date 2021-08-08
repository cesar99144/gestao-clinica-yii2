<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PacientesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pacientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pacientes-index">

    
    <p>
        <?= Html::a('Cadastrar pacientes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nome',
            'tipoPessoa',
            'cpfCnpj:ntext',
            //'rg:ntext',
            //'cep',
            'cidade:ntext',
            'estado:ntext',
            //'logradouro:ntext',
            //'numeroResidencia:ntext',
            //'bairro:ntext',
            //'sexo:ntext',
            //'dataDeNascimento',
            'celular',
            //'fone',
            //'peso',
            //'altura',
            //'portaAlgumaDoença:ntext',
            //'deficiencia:ntext',
            //'codigoAcesso:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
