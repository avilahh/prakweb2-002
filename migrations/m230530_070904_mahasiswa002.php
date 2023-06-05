<?php

use yii\db\Migration;

/**
 * Class m230530_070904_mahasiswa002
 */
class m230530_070904_mahasiswa002 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{mahasiswa002}}', [
            'id002' => $this->primaryKey(),
            'nim002' => $this->string(25)->notNull()->unique(),
            'nama002' => $this->string(225)->notNull(),
            'kelas002' => $this->string(10)->notNull(),
            'status002' => $this->string(50)->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230530_070904_mahasiswa002 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230530_070904_mahasiswa002 cannot be reverted.\n";

        return false;
    }
    */
}
