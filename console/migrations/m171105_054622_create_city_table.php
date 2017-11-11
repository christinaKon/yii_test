<?php

use yii\db\Migration;

/**
 * Handles the creation of table `city`.
 */
class m171105_054622_create_city_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('city', [
            'id' => $this->primaryKey(),
            'city' => $this->string(255)->notNull(),
            'region' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('city');
    }
}
