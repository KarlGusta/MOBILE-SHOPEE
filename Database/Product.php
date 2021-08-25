<?php

// Use to fetch product data
class Product {
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    // Fetch product data using getData method //POWERFUL METHOD POWERFUL METHOD TO GET THE DATA FROM THE TABLE AND DISPLAY IT

    public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // Fetch product data one by one 
        while( $item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get product using item id // This method was first used to get data for the cart table. It will also get according to the SESSION id.
    public function getProduct($item_id = null, $table = 'product'){
        if(isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while( $item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }
}