<?php

use yii\db\Migration;

/**
 * Handles the creation of table `friendlist`.
 */
class m171106_054408_create_friendlist_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('friendlist', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
        ]);
        $this->createIndex(
            'idx-friendlist-user_id',
            'friendlist',
            'user_id'
        );
        $this->addForeignKey(
            'fk-friendlist-user_id',
            'friendlist',
            'user_id',
            'user',
            'id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('friendlist');
    }
}
