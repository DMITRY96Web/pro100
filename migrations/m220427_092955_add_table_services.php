<?php

use yii\db\Migration;

/**
 * Class m220427_092955_add_table_services
 */
class m220427_092955_add_table_services extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('services', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull(),
            'image' => $this->text()->null(),
            'text' => $this->text()->null(),
            'price' => $this->text()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('services');
    }
}
