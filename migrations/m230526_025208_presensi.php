<?php

use yii\db\Migration;

/**
 * Class m230526_025208_presensi
 */
class m230526_025208_presensi extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%presensi}}',[
            'id' => $this->primaryKey(),
            'id_matakuliah' => $this->integer(12)->notNull(),
            'tgl_presensi' => $this->date()->notNull(),
            'metode_pembelajaran' => $this->string(25)->notNull(),

        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230526_025208_presensi cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230526_025208_presensi cannot be reverted.\n";

        return false;
    }
    */
}
