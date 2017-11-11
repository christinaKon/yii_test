<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_info`.
 */
class m171106_054302_create_user_info_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user_info', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'first_name' => $this->string(255)->defaultValue(''),
            'last_name' => $this->string(255)->defaultValue(''),
            'photo' => $this->string(255)->defaultValue(''),
            'about' => $this->text(),
        ]);
        $this->createIndex(
            'idx-user_info-user_id',
            'user_info',
            'user_id'
        );


        $this->addForeignKey(
            'fk-user_info-user_id',
            'user_info',
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
        $this->dropTable('user_info');
    }
}
