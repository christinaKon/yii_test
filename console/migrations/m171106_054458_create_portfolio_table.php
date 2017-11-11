<?php

use yii\db\Migration;

/**
 * Handles the creation of table `portfolio`.
 */
class m171106_054458_create_portfolio_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('portfolio', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'title' => $this->string(255)->notNull(),
            'link' => $this->string(255)->notNull(),
        ]);
        $this->createIndex(
            'idx-portfolio-user_id',
            'portfolio',
            'user_id'
        );

        $this->addForeignKey(
            'fk-portfolio-user_id',
            'portfolio',
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
        $this->dropTable('portfolio');
    }
}
