<?php

class DBController{
// Database Connection Properties
protected $host = 'localhost';
protected $user = 'root';
protected $password = '';
protected $database = 'shopee';

//Connection Property
public $con = null;

//Call  constructor
public function __construct(){
    $this->con = mysql_connect($this->host, $this->user, $this->password, $this->database);
}
}

