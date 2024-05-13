<?php
require_once('../model/Product.php');

if(isset($_POST['add_to_cart'])){
    $data['name'] = $_POST['name']; // Retrieve product ID
    $status = cart($product_id); // Call cart function with product ID
    if($status) 
    {
        header('location:../view/home/home.php');
    } else {
        echo "Error";
    }
}


?>
