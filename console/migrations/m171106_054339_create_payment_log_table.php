<?php

use yii\db\Migration;

/**
 * Handles the creation of table `payment_log`.
 */
class m171106_054339_create_payment_log_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('payment_log', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'payment_id' => $this->integer()->notNull(),
            'payment_code' => $this->string(255)->notNull(),
            'date' => $this->dateTime()->notNull(),
        ]);
        $this->createIndex(
            'idx-payment_log-user_id',
            'payment_log',
            'user_id'
        );


        $this->addForeignKey(
            'fk-payment_log-user_id',
            'payment_log',
            'user_id',
            'user',
            'id'
        );
        $this->createIndex(
            'idx-payment_log-payment_id',
            'payment_log',
            'payment_id'
        );


        $this->addForeignKey(
            'fk-payment_log-payment_id',
            'payment_log',
            'payment_id',
            'payment_packgages',
            'id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('payment_log');
    }
}
