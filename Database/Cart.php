<?php

// php cart class
class Cart {
    public $db = null;

    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table
    public function insertIntoCart(){
        
    }
}