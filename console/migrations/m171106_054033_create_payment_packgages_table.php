<?php

use yii\db\Migration;

/**
 * Handles the creation of table `payment_packgages`.
 */
class m171106_054033_create_payment_packgages_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('payment_packgages', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'price' => $this->float()->notNull(),
            'photo' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('payment_packgages');
    }
}
