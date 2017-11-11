<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order_chat`.
 */
class m171106_054209_create_order_chat_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('order_chat', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'order_id' => $this->integer()->notNull(),
            'message' =>$this->text()->notNull(),
            'date' => $this->dateTime(),
        ]);
        $this->createIndex(
            'idx-order_chat-user_id',
            'order_chat',
            'user_id'
        );


        $this->addForeignKey(
            'fk-order_chat-user_id',
            'order_chat',
            'user_id',
            'user',
            'id'
        );
        $this->createIndex(
            'idx-order_chat-order_id',
            'order_chat',
            'order_id'
        );


        $this->addForeignKey(
            'fk-order_chat-order_id',
            'order_chat',
            'order_id',
            'orders',
            'id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('order_chat');
    }
}
