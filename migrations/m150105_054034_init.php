<?php

use yii\db\Schema;
use yii\db\Migration;

class m150105_054034_init extends Migration
{
    public function up()
    {
        $this->createTable('models', [
            'model_id' => 'pk',
            'model' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    public function down()
    {
        echo "m150105_054034_init cannot be reverted.\n";
        return false;
    }
}
