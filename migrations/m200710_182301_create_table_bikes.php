<?php

use yii\db\Migration;

/**
 * Class m200710_182301_create_table_bikes
 */
class m200710_182301_create_table_bikes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bikes}}', [
            'id' => $this->primaryKey(),
            'brand_id' => $this->integer(4)->notNull(),
            'title' => $this->string(32)->notNull(),
            'slug' => $this->string(32)->notNull()->unique(),
            'description' => $this->text(),
            'image' => $this->string(255),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),

        ]);

        $this->addForeignKey(
            'fk-bike-brand_id',
            'bikes',
            'brand_id',
            'brands',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('bikes');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200710_182301_create_table_bikes cannot be reverted.\n";

        return false;
    }
    */
}
