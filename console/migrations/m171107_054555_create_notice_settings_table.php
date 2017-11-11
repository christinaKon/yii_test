<?php

use yii\db\Migration;

/**
 * Handles the creation of table `notice_settings`.
 */
class m171107_054555_create_notice_settings_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('notice_settings', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'notice_id' => $this->integer()->notNull(),
            'value' => $this->integer()->notNull(),
        ]);
        $this->createIndex(
            'idx-notice_settings-user_id',
            'notice_settings',
            'user_id'
        );

        $this->addForeignKey(
            'fk-notice_settings-user_id',
            'notice_settings',
            'user_id',
            'user',
            'id'
        );
        $this->createIndex(
            'idx-notice_settings-notice_id',
            'notice_settings',
            'notice_id'
        );
        $this->addForeignKey(
            'fk-notice_settings-notice_id',
            'notice_settings',
            'notice_id',
            'notices',
            'id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('notice_settings');
    }
}
