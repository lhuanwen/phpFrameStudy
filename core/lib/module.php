<?php

namespace core\lib;

use core\lib\conf;
use Medoo\Medoo;

class module extends Medoo
{
    public function __construct()
    {
        $option = conf::all('db');
        parent::__construct($option);
    }
}