<?php

use yii\db\Migration;

/**
 * Handles the creation of table `orders_log`.
 */
class m171106_054234_create_orders_log_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('orders_log', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'order_id' => $this->integer()->notNull(),
        ]);
        $this->createIndex(
            'idx-orders_log-user_id',
            'orders_log',
            'user_id'
        );


        $this->addForeignKey(
            'fk-orders_log-user_id',
            'orders_log',
            'user_id',
            'user',
            'id'
        );
        $this->createIndex(
            'idx-orders_log-order_id',
            'orders_log',
            'order_id'
        );


        $this->addForeignKey(
            'fk-orders_log-order_id',
            'orders_log',
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
        $this->dropTable('orders_log');
    }
}
