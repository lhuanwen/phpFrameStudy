<?php

/*
  入口文件
  1.定义变量
  2.加载函数库
  3.启动框架
*/

define('PATH', realpath('./'));
define('CORE', PATH.'/core');
define('APP', PATH.'/app');

define('DEBUG', true);

if(DEBUG){
    ini_set('display_error', 'On');
}else{
    ini_set('display_error', 'Off');
}

include CORE.'/common/function.php';

include CORE.'/leo.php';

\core\leo::run();
