<?php
/**
 * YCMS
 * @license Apache License 2.0
 * @date 2019-04-21
 * @git https://github.com/yuenshui/YCMS.git
 * 
 *  缓存类接口
 */
namespace core\cache;

interface Builder
{

    // 用于获取单一实例
    public static function getInstance();

    // 写入缓存
    public function set($key, $value);

    // 读取缓存
    public function get($key);

    // 删除缓存
    public function delete($key);

    // 清理缓存
    public function flush();
}