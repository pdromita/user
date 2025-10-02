<?php

use yii\db\Migration;

class m250930_174422_create_table_user extends Migration{
    public function up()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'password_hash' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'role' => $this->string(20)->notNull()->defaultValue('user'),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'password_reset_token_expire' => $this->integer(),
            'verification_token' => $this->string()->unique(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}

