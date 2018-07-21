<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 返回码
 * File:   return_code.php
 * Author: Skiychan <dev@skiy.net>
 * Created: 2018-03-23
 */

$config['return_code'] = [
    /* 服务器挂了,别问为什么,挂了就是挂了 */
    'error_-1'   => '服务器负载过高,请稍后重试。',

    /*  0 ~ 100 请求相关 */
    'error_0'    => '操作成功',
    'error_1'    => '操作失败',

    /** 20000 ~ 20999 错误相关 **/
    'error_20000'    => '不合法的参数',
    'error_20001'    => '数据获取失败',
    'error_20002'    => '缺少参数',

    /** 28000 ~ 28999 第三方插件错误相关 */
    'error_28000'    => 'Redis 连接失败',

    /* 50001 ~ 50100 权限相关 */
    'error_50001'    => '缺少 apikey 参数',
    'error_50002'    => 'apikey 无效',
    'error_50003'    => '签名无效',
    'error_50004'    => '操作权限不足',
];