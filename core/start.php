<?php
/**
 * YCMS
 * @license Apache License 2.0
 * @date 2019-04-21
 * @git https://github.com/yuenshui/YCMS.git
 * 
 *  内核启动文件，请使用入口文件对本文件进行引用即可
 */

// 引入初始化文件
require dirname(__FILE__) . '/init.php';

// 入口检测
defined('IS_INDEX') ?: die('不允许直接访问框架启动文件！');

// 启动内核
core\basic\Kernel::run();

 




