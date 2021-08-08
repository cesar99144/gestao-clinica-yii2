<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "agendamentos".
 *
 * @property int $id
 * @property string|null $codigoConsulta
 * @property int|null $idPaciente
 * @property int|null $idExame
 * @property string|null $dataAtendimento
 * @property string|null $observacao
 *
 * @property Exames $idExame0
 * @property Pacientes $idPaciente0
 */
class Agendamentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agendamentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idPaciente', 'idExame'], 'integer'],
            [['dataAtendimento'], 'safe'],
            [['codigoConsulta'], 'string', 'max' => 90],
            [['observacao'], 'string', 'max' => 70],
            [['idExame'], 'exist', 'skipOnError' => true, 'targetClass' => Exames::className(), 'targetAttribute' => ['idExame' => 'id']],
            [['idPaciente'], 'exist', 'skipOnError' => true, 'targetClass' => Pacientes::className(), 'targetAttribute' => ['idPaciente' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigoConsulta' => 'Codigo Consulta',
            'idPaciente' => 'Paciente',
            'idExame' => 'Exame',
            'dataAtendimento' => 'Data Atendimento',
            'observacao' => 'Observacao',
        ];
    }

    /**
     * Gets query for [[IdExame0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExame()
    {
        return $this->hasOne(Exames::className(), ['id' => 'idExame']);
    }

    /**
     * Gets query for [[IdPaciente0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPaciente()
    {
        return $this->hasOne(Pacientes::className(), ['id' => 'idPaciente']);
    }
}
