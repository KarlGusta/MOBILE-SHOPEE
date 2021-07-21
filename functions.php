<?php

// require MySQL Connection

require('Database/DBController.php');

require('Database/Product.php');


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);


