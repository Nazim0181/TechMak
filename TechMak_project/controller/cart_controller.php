<?php
session_start();
require_once('../model/cartdb.php');
require("../model/productdb.php");

if(isset($_POST['add_to_cart'])){
    $product_id = $_POST['product_id']; // Retrieve product ID
    $status = cart($product_id); // Call cart function with product ID
    // var_dump($status);
    if($status) 
    {
        header('location:../view/home/home.php');
    } else {
        echo "Error";
    }
}

if(isset($_POST['search_submit'])){
    $value = $_POST['search'];
    $_SERVER["data"] = searchProduct($value); 
    header('location:../view/home/home.php');
}

if(isset($_POST['remove_from_cart'])){
    $res = remove_cart_item($_POST['cart_id']);
    header('location:../view/home/cart_view.php');
}

?>
