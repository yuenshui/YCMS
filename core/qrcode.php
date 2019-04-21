<?php

/**
 * YCMS
 * @license Apache License 2.0
 * @date 2019-04-21
 * @git https://github.com/yuenshui/YCMS.git
 * 
 *  二维码生成
 */

// 绘制二维码图片
function draw_qcode($string)
{
    require dirname(__FILE__) . '/extend/qrcode/phpqrcode.php'; // 引入类文件
    QRcode::png($string, false, 'M', 6, 1); // 生成二维码图片
}

if (isset($_GET['string']) && $string = $_GET['string']) {
    draw_qcode($string);
} else {
    die('地址必须传入string参数！');
}