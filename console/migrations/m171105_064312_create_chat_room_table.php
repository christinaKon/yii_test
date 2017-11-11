<?php

use yii\db\Migration;

/**
 * Handles the creation of table `chat_room`.
 */
class m171105_064312_create_chat_room_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('chat_room', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
        ]);
        $this->createIndex(
            'idx-chat_room-user_id',
            'chat_room',
            'user_id'
        );


        $this->addForeignKey(
            'fk-chat_room-user_id',
            'chat_room',
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
        $this->dropTable('chat_room');
    }
}
