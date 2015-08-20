<?php
/**
 * @copyright Copyright (c) 2015 Stepan Orda
 * @author Stepan Orda <stepanorda87@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

namespace stepanorda\contenttypes;

use Yii;

/**
 * Class ContentTypes
 * @package stepanorda\contenttypes
 */
class ContentTypes extends \yii\db\ActiveRecord
{
    private static $_data;

    public static function tableName()
    {
        return 'content_types';
    }

    private static function getData()
    {
        if (!ContentTypes::$_data) {
            if (!ContentTypes::$_data = Yii::$app->cache->get('ContentTypes3')) {
                 $tmp= ContentTypes::find()->asArray()->all();
                foreach ($tmp as $v)
                {
                    ContentTypes::$_data[$v['model_id']]=$v['model_name'];
                }
                Yii::$app->cache->set('ContentTypes', ContentTypes::$_data,60);
            }
        }
    }

    private static function addModel($model_name)
    {
        $model = new ContentTypes();
        $model->model_name = $model_name;
        $model->save();
        Yii::$app->cache->delete('ContentTypes');
        return $model->model_id;
    }

    /**
     * @param $name string|object
     */
    public static function findId($name)
    {
        ContentTypes::getData();
    }

    /**
     * @param $id int
     */
    public static function findName($id)
    {
        ContentTypes::getData();
        return ContentTypes::$_data[$id];
    }

}