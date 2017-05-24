<?php

use yii\db\Migration;

class m170524_123205_table_user_update extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'avatar', $this->string());
    }

    public function down()
    {
        echo "m170524_123205_table_user_update cannot be reverted.\n";

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
