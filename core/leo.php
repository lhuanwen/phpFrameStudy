<?php

namespace core;

class leo
{
    public static $classMap = array();
    public $assign;

    static public function run()
    {
        $route = new \core\lib\route();
        $ctrlClass = $route->controller;
        $action = $route->action;
        $ctrlFile = APP.'/controller/'.$ctrlClass.'Controller.php';
        $ctrlClass = '\\'.MODULE.'\controller\\'.$ctrlClass.'Controller';
        if (is_file($ctrlFile)){
            include $ctrlFile;
            $controller = new $ctrlClass;
            if(method_exists($controller, $action)){
                $controller->$action();
            }else{
                throw new \Exception($ctrlClass."找不到方法".$action.'()');
            }
        }else {
            throw new \Exception("找不到控制器".$ctrlClass);
        }
    }

    static public function load($class)
    {
        //自动加载类库
        //new \core\route();
        //$class = '\core\route';
        //PATH.'/core/route.php';

        if(isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\', '/', $class);
            $file = PATH.'/'.$class.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }

    }

    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    public function display($file)
    {
        $file = APP.'/views/'.$file;
        if ($file){
            extract($this->assign);
            include $file;
        }
    }
}