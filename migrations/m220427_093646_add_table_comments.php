<?php

use yii\db\Migration;

/**
 * Class m220427_093646_add_table_comments
 */
class m220427_093646_add_table_comments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'name' => $this->string(60)->notNull(),
            'email' => $this->string(60)->notNull(),
            'subject' => $this->string(150)->null(),
            'message' => $this->text()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comments');
    }
}
