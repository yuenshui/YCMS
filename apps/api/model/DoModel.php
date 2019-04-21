<?php
/**
 * YCMS
 * @license Apache License 2.0
 * @date 2019-04-21
 * @git https://github.com/yuenshui/YCMS.git
 * 
 *  
 */
namespace app\api\model;

use core\basic\Model;

class DoModel extends Model
{

    // 新增访问
    public function addVisits($id)
    {
        $data = array(
            'visits' => '+=1'
        );
        parent::table('ay_content')->where("id='$id'")->update($data);
    }

    // 新增喜欢
    public function addLikes($id)
    {
        $data = array(
            'likes' => '+=1'
        );
        parent::table('ay_content')->where("id='$id'")->update($data);
    }

    // 新增喜欢
    public function addOppose($id)
    {
        $data = array(
            'oppose' => '+=1'
        );
        parent::table('ay_content')->where("id='$id'")->update($data);
    }
}