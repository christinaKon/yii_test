<?php

use yii\db\Migration;

/**
 * Handles the creation of table `languages`.
 */
class m171106_054639_create_languages_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('languages', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'small_name' => $this->string(5)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('languages');
    }
}
