<?php

use yii\db\Migration;

/**
 * Class m200606_044906_test_table
 */
class m200606_044906_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200606_044906_test_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200606_044906_test_table cannot be reverted.\n";

        return false;
    }
    */
}
