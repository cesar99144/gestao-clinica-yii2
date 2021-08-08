<?php

use phpDocumentor\Reflection\Types\Integer;
use yii\db\Migration;

/**
 * Class m210808_002927_create_table_agendamentos
 */
class m210808_002927_create_table_agendamentos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("{{%agendamentos}}", [
            'id' => $this->primaryKey(),
            'codigoConsulta' => $this->string(90),
            'idPaciente' => $this->integer(),
            'idExame' => $this->integer(),
            'dataAtendimento' => $this->date(),
            'observacao' => $this->string(70),
        ]);

        $this->addForeignKey(
            'fk-agendamento-paciente', 
            'agendamentos', 
            'idPaciente', 
            'pacientes', 
            'id'
        );

        $this->addForeignKey(
            'fk-agendamento-exame',
            'agendamentos', 
            'idExame', 
            'exames', 
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210808_002927_create_table_agendamentos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210808_002927_create_table_agendamentos cannot be reverted.\n";

        return false;
    }
    */
}
