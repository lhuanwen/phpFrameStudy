<?php

namespace app\controller;

use app\model\cModel;
use core\leo;

class indexController extends leo
{
    public function index()
    {
        $data = 'hello world';
        $this->assign('data', $data);
        $this->display('index/index.html');
    }
}