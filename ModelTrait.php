<?php
/**
 * @copyright Copyright (c) 2015 Stepan Orda
 * @author Stepan Orda <stepanorda87@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */


namespace stepanorda\contenttypes;
use Yii;

trait ModelTrait
{
    static $_models=[];
    public function getModel()
    {
        if ($this->connection_id and $this->model_id and $model_name = ContentTypes::findName($this->model_id))
        {
            if (class_exists ($model_name))
            {
                $class = __CLASS__;
                if (!$class::$_models[$this->model_id][$this->connection_id])
                {
                    $class::$_models[$this->model_id][$this->connection_id]=$model_name::findOne($this->connection_id);
                }
                return $class::$_models[$this->model_id][$this->connection_id];
            }
            else
            {
                Yii::trace("Class $model_name dosesn't exist!");
            }
        }
    }
}