<?php
/**
 * YCMS
 * @license Apache License 2.0
 * @date 2019-04-21
 * @git https://github.com/yuenshui/YCMS.git
 * 
 *  应用公共模型类
 */
namespace app\common;

use core\basic\Model;

class AdminModel extends Model
{

    // 获取配置参数
    public function getConfig()
    {
        return parent::table('ay_config')->column('value', 'name');
    }

    // 获取站点配置信息
    public function getSite()
    {
        return parent::table('ay_site')->where("acode='" . session('acode') . "'")->find();
    }

    // 获取公司配置信息
    public function getCompany()
    {
        return parent::table('ay_company')->where("acode='" . session('acode') . "'")->find();
    }
}