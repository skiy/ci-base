<?php

/**
 * 环境变量
 * File:   env.php
 * Author: Skiychan <dev@skiy.net>
 * Created: 2017-12-13
 */

switch($_SERVER["SERVER_ADDR"]) {
    case "127.0.0.1":
        define('ENVIRONMENT', 'development');
        break;

    default:
        define('ENVIRONMENT', 'production');
}