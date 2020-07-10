<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%brands}}`.
 */
class m200710_161712_create_brands_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%brands}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(32)->notNull(),
            'description' => $this->text(),
            'icon' => $this->string(255),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%brands}}');
    }
}
