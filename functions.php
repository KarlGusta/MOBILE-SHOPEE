<?php

// require MySQL Connection

require('Database/DBController.php');

// required product class
require('Database/Product.php');

// required cart class
require('Database/Cart.php');

// required login class
require('Database/Login.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db);

// Login object
$Login = new Login($db);
