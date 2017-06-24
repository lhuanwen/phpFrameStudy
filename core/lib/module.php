<?php

namespace core\lib;

class module extends \PDO
{
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=test';
        $username = 'root';
        $passwd = '';
        try{
           parent::__construct($dsn, $username, $passwd);
        }catch (\Exception $e){
            p($e->getMessage());
        }
    }
}