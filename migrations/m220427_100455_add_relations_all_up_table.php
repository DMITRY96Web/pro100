<?php

use yii\db\Migration;

/**
 * Class m220427_100455_add_relations_all_up_table
 */
class m220427_100455_add_relations_all_up_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //создаем атрибуты для внешних ключей
        $this->addColumn('users', 'role_id', $this->integer()->null());
        $this->addColumn('comments', 'reguest_id', $this->integer()->null());
        $this->addColumn('reguests', 'service_id', $this->integer()->null());
        $this->addColumn('reguests', 'user_id', $this->integer()->null());

        //создаем вннешние ключи
        $this->addForeignKey(
            'fk-roles-to-users',
            'users',
            'role_id',
            'roles',
            'id'
        );

        $this->addForeignKey(
            'fk-users-reguests',
            'reguests',
            'user_id',
            'users',
            'id'
        );

        $this->addForeignKey(
            'fk-services-reguests',
            'reguests',
            'service_id',
            'services',
            'id'
        );

        $this->addForeignKey(
            'fk-reguests-comments',
            'comments',
            'reguest_id',
            'reguests',
            'id'
        );
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('users', 'role_id');
        $this->dropColumn('comments', 'reguest_id');
        $this->dropColumn('reguests', 'service_id');
        $this->dropColumn('reguests', 'user_id');

        $this->dropForeignKey('fk-roles-to-users', 'user');
        $this->dropForeignKey('fk-users-reguests', 'reguests');
        $this->dropForeignKey('fk-services-reguests', 'reguests');
        $this->dropForeignKey('fk-reguests-comments', 'comments');
    }
}
