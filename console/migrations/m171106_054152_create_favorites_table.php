<?php

use yii\db\Migration;

/**
 * Handles the creation of table `favorites`.
 */
class m171106_054152_create_favorites_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('favorites', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'order_id' => $this->integer()->notNull(),
        ]);
        $this->createIndex(
            'idx-favorites-user_id',
            'favorites',
            'user_id'
        );


        $this->addForeignKey(
            'fk-favorites-user_id',
            'favorites',
            'user_id',
            'user',
            'id'
        );
        $this->createIndex(
            'idx-favorites-order_id',
            'favorites',
            'order_id'
        );


        $this->addForeignKey(
            'fk-favorites-order_id',
            'favorites',
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
        $this->dropTable('favorites');
    }
}
