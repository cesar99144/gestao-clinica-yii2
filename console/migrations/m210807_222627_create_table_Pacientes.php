<?php

use yii\db\Migration;

/**
 * Class m210807_222627_create_table_Pacientes
 */
class m210807_222627_create_table_Pacientes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("{{%Pacientes}}", [
            'id' => $this->primaryKey(),
            'nome' => $this->string(120),
            'tipoPessoa' => $this->string(120),
            'cpfCnpj' => $this->text(40),
            'rg' => $this->text(20),
            'cep' => $this->text(30),
            'cidade' => $this->text(90),
            'estado' => $this->text(90),
            'logradouro' => $this->text(90),
            'numeroResidencia' => $this->text(90),
            'bairro' => $this->text(90),
            'sexo' => $this->text(50),
            'dataDeNascimento' => $this->date(),
            'celular' => $this->text(30),
            'fone' => $this->text(30),
            'peso' => $this->float(),
            'altura' => $this->float(),
            'portaAlgumaDoença' => $this->text(130),
            'deficiencia' => $this->text(130),
            'codigoAcesso' => $this->text(80),
         ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210807_222627_create_table_Pacientes cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210807_222627_create_table_Pacientes cannot be reverted.\n";

        return false;
    }
    */
}
