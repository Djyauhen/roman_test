<?php

use yii\db\Migration;

/**
 * Class m240624_220254_new_migration
 */
class m240624_220254_new_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%users}}', [
            'id' => 99,
            'first_name' => 'Игорь',
            'last_name' => 'Харламов',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%users}}', [
            'id' => 99,
            'first_name' => 'Игорь',
            'last_name' => 'Харламов',
            ]);

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240624_220254_new_migration cannot be reverted.\n";

        return false;
    }
    */
}
