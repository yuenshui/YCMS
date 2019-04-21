<?php
/**
 * YCMS
 * @license Apache License 2.0
 * @date 2019-04-21
 * @git https://github.com/yuenshui/YCMS.git
 * 
 *  内容输出类
 */
namespace core\basic;

class Response
{

    // 根据配置文件选择
    public static function handle($data)
    {
        if (Config::get('return_data_type') == 'html') {
            print_r($data);
        } else {
            if (array_key_exists('code', $data)) {
                $code = $data['code'];
                unset($data['code']);
                self::json($code, $data);
            } else {
                self::json(1, $data);
            }
        }
    }

    // 服务端API返回JSON数据
    public static function json($code, $data)
    {
        @ob_clean();
        $output['code'] = $code ?: 0;
        $output['data'] = $data ?: array();
        
        if (defined('ROWTOTAL')) {
            $output['rowtotal'] = ROWTOTAL;
        } else {
            if (is_array($data) || is_object($data)) {
                $output['rowtotal'] = count($data);
            } else {
                $output['rowtotal'] = 1;
            }
        }
        
        if (PHP_VERSION >= 5.4) { // 中文不编码 5.4+
            $option = JSON_UNESCAPED_UNICODE;
        } else {
            $option = JSON_HEX_TAG;
        }
        echo json_encode($output, $option);
        exit();
    }
}