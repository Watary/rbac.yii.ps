<?php

use yii\db\Migration;

class m170601_135127_create_table_friends extends Migration
{
    public function up()
    {
        $this->createTable('friends', [
            'id'            =>  $this->primaryKey(),
            'id_user'       =>  $this->integer()->notNull(),
            'id_friend'     =>  $this->integer()->notNull(),
            'active'        =>  $this->boolean()->notNull()->defaultValue(false),
            'date'          =>  $this->integer()->notNull()
        ]);
    }

    public function down()
    {
        echo "m170601_135127_create_table_friends cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
