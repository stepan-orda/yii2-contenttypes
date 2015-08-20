<?php
/**
 * @copyright Copyright (c) 2015 Stepan Orda
 * @author Stepan Orda <stepanorda87@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

namespace stepanorda\contenttypes;


/**
 * Class Module
 */
class Module extends \yii\base\Module
{
    /**
     * @var string Table to store models data
     */
    public $table='models';
    public $model_field='model_id';
    public $connection_field='connection_id';

}