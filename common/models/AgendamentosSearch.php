<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Agendamentos;

/**
 * AgendamentosSearch represents the model behind the search form of `common\models\Agendamentos`.
 */
class AgendamentosSearch extends Agendamentos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idPaciente', 'idExame'], 'integer'],
            [['codigoConsulta', 'dataAtendimento', 'observacao'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Agendamentos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'idPaciente' => $this->idPaciente,
            'idExame' => $this->idExame,
            'dataAtendimento' => $this->dataAtendimento,
        ]);

        $query->andFilterWhere(['like', 'codigoConsulta', $this->codigoConsulta])
            ->andFilterWhere(['like', 'observacao', $this->observacao]);

        return $dataProvider;
    }
}
