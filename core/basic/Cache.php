<?php
/**
 * YCMS
 * @license Apache License 2.0
 * @date 2019-04-21
 * @git https://github.com/yuenshui/YCMS.git
 * 
 *  缓存统一调用类 
 */
namespace core\basic;

use core\basic\Config;
use core\cache\Memcache;

class Cache
{

    // 获取缓存实例
    protected static function getCacheInstance()
    {
        switch (Config::get('cache.handler')) {
            case 'memcache':
                $instance = Memcache::getInstance();
                break;
            default:
                $instance = Memcache::getInstance();
        }
        return $instance;
    }

    // 写入缓存
    public static function set($key, $value)
    {
        $cache = self::getCacheInstance();
        return $cache->set($key, $value);
    }

    // 读取缓存
    public static function get($key)
    {
        $cache = self::getCacheInstance();
        return $cache->get($key);
    }

    // 删除缓存
    public static function delete($key)
    {
        $cache = self::getCacheInstance();
        return $cache->delete($key);
    }

    // 清理缓存
    public static function flush()
    {
        $cache = self::getCacheInstance();
        return $cache->flush();
    }
}