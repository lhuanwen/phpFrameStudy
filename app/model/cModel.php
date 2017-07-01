<?php

/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2017/7/2
 * Time: 0:49
 */
namespace app\model;

use core\lib\module;

class cModel extends module
{
    public $table = 'info';

    public function lists()
    {
        $res = $this->select($this->table, '*');
        return $res;
    }

    public function getOne($id)
    {
        $res = $this->get($this->table, '*', [
            'id' => $id
        ]);
        return $res;
    }

    public function setOne($id, $data)
    {
        return $this->update($this->table, $data, [
            'id' => $id
        ]);
    }

    public function delOne($id)
    {
        return $this->delete($this->table, [
            'id' => $id
        ]);
    }

}