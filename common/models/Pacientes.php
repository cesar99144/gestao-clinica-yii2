<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pacientes".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $tipoPessoa
 * @property string|null $cpfCnpj
 * @property string|null $rg
 * @property int|null $cep
 * @property string|null $cidade
 * @property string|null $estado
 * @property string|null $logradouro
 * @property string|null $numeroResidencia
 * @property string|null $bairro
 * @property string|null $sexo
 * @property string|null $dataDeNascimento
 * @property int|null $celular
 * @property int|null $fone
 * @property float|null $peso
 * @property float|null $altura
 * @property string|null $portaAlgumaDoença
 * @property string|null $deficiencia
 * @property string|null $codigoAcesso
 */
class Pacientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pacientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cpfCnpj', 'rg', 'cidade', 'estado', 'logradouro', 'numeroResidencia', 'bairro', 'sexo', 'portaAlgumaDoença', 'deficiencia', 'codigoAcesso'], 'string'],
            [['cep', 'celular', 'fone'], 'integer'],
            [['dataDeNascimento'], 'safe'],
            [['peso', 'altura'], 'number'],
            [['nome', 'tipoPessoa'], 'string', 'max' => 120],
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
            'tipoPessoa' => 'Tipo Pessoa',
            'cpfCnpj' => 'Cpf Cnpj',
            'rg' => 'Rg',
            'cep' => 'Cep',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'logradouro' => 'Logradouro',
            'numeroResidencia' => 'Numero Residencia',
            'bairro' => 'Bairro',
            'sexo' => 'Sexo',
            'dataDeNascimento' => 'Data De Nascimento',
            'celular' => 'Celular',
            'fone' => 'Fone',
            'peso' => 'Peso',
            'altura' => 'Altura',
            'portaAlgumaDoença' => 'Porta Alguma Doença',
            'deficiencia' => 'Deficiencia',
            'codigoAcesso' => 'Codigo Acesso',
        ];
    }
}
