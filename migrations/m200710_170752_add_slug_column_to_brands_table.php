<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%brands}}`.
 */
class m200710_170752_add_slug_column_to_brands_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('brands', 'slug', $this->string(32)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
}
