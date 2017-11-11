<?php

use yii\db\Migration;

/**
 * Handles the creation of table `my_smi`.
 */
class m171106_054324_create_my_smi_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('my_smi', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'position' => $this->string(255)->notNull(),
            'site' => $this->string(255)->notNull(),
            'city_id' => $this->integer()->notNull(),
        ]);
        $this->createIndex(
            'idx-my_smi-city_id',
            'my_smi',
            'city_id'
        );


        $this->addForeignKey(
            'fk-my_smi-city_id',
            'my_smi',
            'city_id',
            'city',
            'id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('my_smi');
    }
}
