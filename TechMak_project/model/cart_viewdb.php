<?php
require_once('db.php'); // Include the database connection file
session_start();
function get_cart_items() {
    $con = conn(); // Use the conn() function from db.php to establish a database connection

    $res = null; // Define $res outside of the condition

    // Query the database to fetch cart items
    $customer_id = $_SESSION['user']['id'];
    $sql = "SELECT * FROM cart WHERE customer_id=".$customer_id;
    $res = $con->query($sql);

    // if(!$res) {
    //     die("Query failed: " . $res->error());
    // }

    $cart_items = [];
    if($res->num_rows > 0){
        
        while ($cart = $res->fetch_assoc()) {
            $data = [];
            $data['id'] = $cart['id'];
            $data['qty'] = $cart['quantity'];
            $sql2 = "SELECT * FROM products WHERE id='".$cart['product_id']."'";
            $res2 = $con->query($sql2);
            $data['sql'] = $res2;
            if($res2->num_rows > 0){
                $product = $res2->fetch_assoc();
                $data['product'] = $product;
                $data['name'] = $product['name'];
                $data['price'] = $product['price'];
                $data['category'] = $product['category'];
                $data['photo'] = $product['photo'];
            }
            $cart_items[] = $data;
            
        }
    }

    // Close the database connection
    mysqli_close($con);

    return $cart_items;
}

?>
