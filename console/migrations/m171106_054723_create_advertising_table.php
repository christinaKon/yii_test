<?php

use yii\db\Migration;

/**
 * Handles the creation of table `advertising`.
 */
class m171106_054723_create_advertising_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('advertising', [
            'id' => $this->primaryKey(),
            'type' => $this->integer()->notNull(),
            'banner_code' => $this->text()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('advertising');
    }
}
