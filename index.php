<?php

/**
 * 入口文件
 * 1.定义变量
 * 2.加载函数库
 * 3.启动框架
 */

define('PATH', realpath('./'));
define('CORE', PATH . '/core');
define('APP', PATH . '/app');
define('MODULE', 'app');

define('DEBUG', true);

include "vendor/autoload.php";

if (DEBUG) {
    $whoops = new \Whoops\Run;
    $errorTitle = 'framework error';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_error', 'On');
} else {
    ini_set('display_error', 'Off');
}

include CORE . '/common/function.php';

include CORE . '/leo.php';

spl_autoload_register('\core\leo::load');
\core\leo::run();
