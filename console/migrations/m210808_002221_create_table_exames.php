<?php

use yii\db\Migration;

/**
 * Class m210808_002221_create_table_exames
 */
class m210808_002221_create_table_exames extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("{{%exames}}",[
            'id' => $this->primaryKey(),
            'nome' => $this->text(120),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210808_002221_create_table_exames cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210808_002221_create_table_exames cannot be reverted.\n";

        return false;
    }
    */
}
