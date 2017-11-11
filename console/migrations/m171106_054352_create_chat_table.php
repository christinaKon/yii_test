<?php

use yii\db\Migration;

/**
 * Handles the creation of table `chat`.
 */
class m171106_054352_create_chat_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('chat', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'room_id' => $this->integer()->notNull(),
            'message' => $this->string(255)->notNull(),
            'date' => $this->dateTime()->notNull(),
        ]);
        $this->createIndex(
            'idx-chat-user_id',
            'chat',
            'user_id'
        );


        $this->addForeignKey(
            'fk-chat-user_id',
            'chat',
            'user_id',
            'user',
            'id'
        );
        $this->createIndex(
            'idx-chat-room_id',
            'chat',
            'room_id'
        );


        $this->addForeignKey(
            'fk-chat-room_id',
            'chat',
            'room_id',
            'chat_room',
            'id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('chat');
    }
}
