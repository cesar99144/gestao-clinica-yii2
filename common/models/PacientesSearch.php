<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pacientes;

/**
 * PacientesSearch represents the model behind the search form of `common\models\Pacientes`.
 */
class PacientesSearch extends Pacientes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cep', 'celular', 'fone'], 'integer'],
            [['nome', 'tipoPessoa', 'cpfCnpj', 'rg', 'cidade', 'estado', 'logradouro', 'numeroResidencia', 'bairro', 'sexo', 'dataDeNascimento', 'portaAlgumaDoença', 'deficiencia', 'codigoAcesso'], 'safe'],
            [['peso', 'altura'], 'number'],
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
        $query = Pacientes::find();

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
            'cep' => $this->cep,
            'dataDeNascimento' => $this->dataDeNascimento,
            'celular' => $this->celular,
            'fone' => $this->fone,
            'peso' => $this->peso,
            'altura' => $this->altura,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'tipoPessoa', $this->tipoPessoa])
            ->andFilterWhere(['like', 'cpfCnpj', $this->cpfCnpj])
            ->andFilterWhere(['like', 'rg', $this->rg])
            ->andFilterWhere(['like', 'cidade', $this->cidade])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'logradouro', $this->logradouro])
            ->andFilterWhere(['like', 'numeroResidencia', $this->numeroResidencia])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'portaAlgumaDoença', $this->portaAlgumaDoença])
            ->andFilterWhere(['like', 'deficiencia', $this->deficiencia])
            ->andFilterWhere(['like', 'codigoAcesso', $this->codigoAcesso]);

        return $dataProvider;
    }
}
