<?php
/**
 * @copyright Copyright (c) 2015 Stepan Orda
 * @author Stepan Orda <stepanorda87@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

namespace stepanorda\contenttypes;


/**
 * Class ContentTypes
 * @package stepanorda\contenttypes
 */
class ContentTypes extends \yii\db\ActiveRecord
{
    private static $_data;

    private static function getData()
    {
        if (!ContentTypes::$_data=Yii::$app->cache->get('ContentTypes'))
        {
            ContentTypes::$_data=ContentTypes::find()->asArray()->indexBy('model_id')->all();
            Yii::$app->cache->set('ContentTypes',ContentTypes::$_data);
        }
    }

    private static function addModel($model_name)
    {
        $model=new ContentTypes();
        $model->model_name=$model_name;
        $model->save();
        Yii::$app->cache->delete('ContentTypes');
        return $model->model_id;
    }

    /**
     * @param $name string|object
     */
    public static function findId($name)
    {
        if (!ContentTypes::$_data)ContentTypes::getData();
    }

    /**
     * @param $id int
     */
    public static function findName($id)
    {
        if (!ContentTypes::$_data)ContentTypes::getData();
        return ContentTypes::$_data[$id];
    }

}