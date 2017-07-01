<?php

namespace app\controller;

use app\model\cModel;
use core\leo;

class indexController extends leo
{
    public function index()
    {
        $model = new cModel();
        $res = $model->lists();
        dump($res);
    }
}