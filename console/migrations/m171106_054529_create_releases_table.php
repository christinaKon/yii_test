<?php

use yii\db\Migration;

/**
 * Handles the creation of table `releases`.
 */
class m171106_054529_create_releases_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('releases', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'created_at' => $this->dateTime(),
        ]);
        $this->createIndex(
            'idx-releases-user_id',
            'releases',
            'user_id'
        );

        $this->addForeignKey(
            'fk-releases-user_id',
            'releases',
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
        $this->dropTable('releases');
    }
}
