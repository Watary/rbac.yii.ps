<?php

use yii\db\Migration;

class m170522_134115_create_post extends Migration
{
    public function up()
    {
        $this->createTable('post', [
            'id'            =>  $this->primaryKey(),
            'title'         =>  $this->string(),
            'description'   =>  $this->text(),
            'author'        =>  $this->integer()
        ]);
    }

    public function down()
    {
        echo "m170522_134115_create_post cannot be reverted.\n";

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
