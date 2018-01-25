<?php

/**
 * 环境变量
 * File:   env.php
 * Author: Skiychan <dev@skiy.net>
 * Created: 2017-12-13
 */

switch($_SERVER["SERVER_ADDR"]) {
    //现网
    case "172.16.1.230":
        define('ENVIRONMENT', 'production');
        break;

    default:
        define('ENVIRONMENT', 'development');
}