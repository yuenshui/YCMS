<?php
/**
 * YCMS
 * @license Apache License 2.0
 * @date 2019-04-21
 * @git https://github.com/yuenshui/YCMS.git
 * 
 *  数据库快速操作类
 */
namespace core\basic;

use core\basic\Model;

class Db
{

    // 对象方式动态调用数据库操作方法
    public function __call($methed, $args)
    {
        $model = new Model();
        $result = call_user_func_array(array(
            $model,
            $methed
        ), $args);
        return $result;
    }

    // 静态方式动态调用数据库操作方法
    public static function __callstatic($methed, $args)
    {
        $model = new Model();
        $result = call_user_func_array(array(
            $model,
            $methed
        ), $args);
        return $result;
    }
}