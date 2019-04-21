<?php
/**
 * YCMS
 * @license Apache License 2.0
 * @date 2019-04-21
 * @git https://github.com/yuenshui/YCMS.git
 * 
 *  站点配置模型类
 */
namespace app\admin\model\content;

use core\basic\Model;

class SiteModel extends Model
{

    // 获取系统配置信息
    public function getList()
    {
        return parent::table('ay_site')->where("acode='" . session('acode') . "'")->find();
    }

    // 检查系统配置信息
    public function checkSite()
    {
        return parent::table('ay_site')->where("acode='" . session('acode') . "'")->find();
    }

    // 增加系统配置信息
    public function addSite($data)
    {
        return parent::table('ay_site')->insert($data);
    }

    // 修改系统配置信息
    public function modSite($data)
    {
        return parent::table('ay_site')->where("acode='" . session('acode') . "'")->update($data);
    }

    // 系统数据库版本
    public function getMysql()
    {
        return parent::one('SELECT VERSION()', MYSQLI_NUM);
    }
}