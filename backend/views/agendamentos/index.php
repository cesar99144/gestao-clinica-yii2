<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AgendamentosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agendamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agendamentos-index">

    <p>
        <?= Html::a('Create Agendamentos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'codigoConsulta',
            [
                'attribute' => 'idPaciente',
                'value' => 'paciente.nome',
            ],
            [
                'attribute' => 'idExame',
                'value' => 'exame.nome',
            ],
            
            'dataAtendimento',
            //'observacao',

            //['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => [],
                'header'=>'Opções',
                'template' => '{view}',
                'visibleButtons'=>[
                    
                ]
            ],
        ],
    ]); ?>


</div>
