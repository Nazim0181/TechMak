<?php
require_once('db.php');
session_start();
function insert_checkout_info($customer_name, $delivery_address, $mail_address, $phone, $total, $payment_method) {
    $connection = conn();
    $user_id = $_SESSION['user']['id'];
    $sql2 = "SELECT * FROM cart WHERE customer_id=".$user_id;
    $res = $connection->query($sql2);

    $products = [];

    if($res->num_rows > 0){
        
        while ($cart = $res->fetch_assoc()) {
            $data = [];
            $data['id'] = $cart['product_id'];
            $data['qty'] = $cart['quantity'];
            $products[] = $data;
        }
    }
    $products = serialize($products);
    
    $sql = "INSERT INTO checkout (customer_id, delivery_address, mail_address, phone, total, payment_method,products) 
            VALUES ('$user_id', '$delivery_address', '$mail_address', '$phone', '$total', '$payment_method','$products')";
    
    if ($connection->query($sql) === TRUE) {
        echo "YOUR ORDER IS SUCCESSFULLY PLACED";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    
    $connection->close();
}

function getTotal(){
    $con = conn();
    $sql = "SELECT * FROM cart WHERE customer_id=".$_SESSION['user']['id'];
    $res = mysqli_query($con,$sql);
    $total = 0;
    
    if(mysqli_num_rows($res) > 0){
        while($cart = mysqli_fetch_assoc($res)){
            $data['qty'] = $cart['quantity'];
            $sql2 = "SELECT * FROM products WHERE id='".$cart['product_id']."'";
            $res2 = $con->query($sql2);
            $data['sql'] = $res2;
            if($res2->num_rows > 0){
                $product = $res2->fetch_assoc();
                $data['price'] = $product['price'];
            }
            $total += ($data["qty"] * $data["price"]);
        }
    }
    return $total;
}

?>
