<?php

use yii\db\Schema;
use yii\db\Migration;

class m150105_054034_init extends Migration
{
    public function up()
    {
        $this->createTable('content_types', [
            'model_id' => 'pk',
            'model_name' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    public function down()
    {
        echo "m150105_054034_init cannot be reverted.\n";
        return false;
    }
}
