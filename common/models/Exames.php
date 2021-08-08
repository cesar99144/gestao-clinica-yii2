<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "exames".
 *
 * @property int $id
 * @property string|null $nome
 *
 * @property Agendamentos[] $agendamentos
 */
class Exames extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exames';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
        ];
    }

    /**
     * Gets query for [[Agendamentos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAgendamentos()
    {
        return $this->hasMany(Agendamentos::className(), ['idExame' => 'id']);
    }
}
