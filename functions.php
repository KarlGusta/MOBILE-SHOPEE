<?php

// require MySQL Connection

require('Database/DBController.php');

// required product class
require('Database/Product.php');

// required cart class
require('Database/Cart.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$cart = new Cart($db);
