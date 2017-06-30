<?php

namespace app\controller;

class indexController extends \core\leo
{
    public function index()
    {
        new \core\lib\module();
        $title = '视图文件';
        $data = 'hello world';
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->display('index/index.html');
    }
}