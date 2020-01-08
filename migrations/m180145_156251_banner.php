<?php

use yii\db\Migration;

/**
 * Class m180145_156251_banner
 */
class m180145_156251_banner extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }


        $this->createTable('reklam', [
            'reklamid' => $this->primaryKey(),
            'reklamadi' => $this->string(250)->notNull(),
            'reklamkodu' => $this->string(250)->notNull(),
            'reklamurl' => $this->string(250)->notNull(),
            'reklamolusturan' => $this->string(250)->notNull(),
            
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4'); 


    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
         $this->dropTable('reklam');
    }


}
