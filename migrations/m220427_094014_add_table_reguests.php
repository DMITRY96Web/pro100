<?php

use yii\db\Migration;

/**
 * Class m220427_094014_add_table_reguests
 */
class m220427_094014_add_table_reguests extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('reguests', [
            'id' => $this->primaryKey(),
            'name' => $this->string(60)->notNull(),
            'number_car' => $this->string(10)->notNull(),
            'date' => $this->date()->notNull(),
            'time' => $this->time()->notNull(),
            'phone' => $this->string(20)->notNull(),
            'comment' => $this->text()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('reguests');
    }
}
