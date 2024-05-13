<?php
require_once('../model/cart_viewdb.php');

// Check if the form is submitted to view the cart
if(isset($_POST['cart_view'])) {


    // Fetch cart items
    $cart_items = get_cart_items(); 
    require_once('../view/home/cart_view.php');

    // Load the view

}
?>
