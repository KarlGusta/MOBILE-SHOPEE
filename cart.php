<?php
ob_start();

// include Header.php file
include('header.php');
?>

<?php
// include cart items if it is not empty
count($product->getData('cart')) ? include('Template/_cart-template.php') : include('Template/notFound/_cart_notFound.php');
// include cart items if it is not empty

// include wishlist items if it is not empty
count($product->getData('wishlist')) ? include('Template/_wishlist_template.php') : include('Template/notFound/_wishlist_notFound.php');
// include wishlist items if it is not empty

// include new phones section
include('Template/_new-phones.php');
//include new phones section
?>

<?php
// include Footer.php file
include('footer.php');
?>