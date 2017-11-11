<?php

use yii\db\Migration;

/**
 * Handles the creation of table `notices`.
 */
class m171106_054654_create_notices_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('notices', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'message' => $this->text(),
            'description' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('notices');
    }
}
