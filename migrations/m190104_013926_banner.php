<?php

use yii\db\Migration;

/**
 * Class m190104_013926_banner
 */
class m190104_013926_banner extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {


        $this->createTable('bannerr', [
            'bannerr_id' => $this->primaryKey(),
            'bannerr_adi' => $this->string(250)->notNull(),
            'bannerr_kodu' => $this->string(250)->notNull(),
            'bannerr_resim_url' => $this->string(250)->notNull(),
            'bannerr_reklam_url' => $this->string(250)->notNull(),
            'bannerr_created' => $this->string(250)->notNull(),
            
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4'); 


    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
         $this->dropTable('bannerr');
    }


}
