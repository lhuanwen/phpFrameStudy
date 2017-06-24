<?php

namespace app\controller;

class indexController
{
    public function index(){
        p('it is index');
        $model = new \core\lib\module();
        $sql = "select * from info";
        $res = $model->query($sql);
        p($res->fetchAll());
    }
}