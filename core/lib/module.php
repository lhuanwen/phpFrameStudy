<?php

namespace core\lib;

use core\lib\conf;

class module extends \PDO
{
    public function __construct()
    {
        $db = conf::all('db');
        try {
            parent::__construct($db['DSN'], $db['USERNAME'], $db['PASSWD']);
        } catch (\Exception $e) {
            p($e->getMessage());
        }
    }
}