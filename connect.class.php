<?php

function __autoload($class){
    require_once "{$class}.class.php";
}

abstract class Connect
{
    private $cnx;

    private function setConnect(){
        return is_null($this->cnx)? new PDO("mysql:host=localhost;dbname=databasename;charset=utf8","databaseuser","databasepassword"):$this->cnx;
    }

    protected function getConnect(){
        return $this::setConnect();
    }


}
