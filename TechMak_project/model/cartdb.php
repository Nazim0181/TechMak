<?php
require_once('db.php');
function cart($product_id)
{
    $con = conn(); // Establish database connection

    $sql = "SELECT * FROM cart WHERE product_id=".$product_id." AND customer_id=".$_SESSION['user']['id'];

    $res = mysqli_query($con,$sql);
    
    $product = null;

    if($res){
        $product = mysqli_fetch_assoc($res);
    }
    
    if($product){
        $value = $product['quantity']+1;
        $sql = "UPDATE cart SET quantity='$value' WHERE product_id=".$product_id." AND customer_id=".$_SESSION['user']['id'];    
    }
    else{
        $customer_id = $_SESSION['user']['id'];
        $sql = "INSERT INTO cart (product_id,quantity,customer_id) VALUES ('$product_id','1','$customer_id')";
    }
    $res = mysqli_query($con,$sql);
    
    if($res) {
        return true;
    } else {
        return false;
    }
}
function getCount(){
    $customer_id = $_SESSION['user']['id'];
    $sql = "SELECT * FROM cart WHERE customer_id='".$customer_id."'";
    $res = mysqli_query(conn(), $sql);
    if($res){
        return mysqli_num_rows($res);
    }
    else{
        return 0;
    }
}
function remove_cart_item($id){
    $sql = "DELETE FROM cart WHERE id=".$id;
    var_dump($sql);
    $res = mysqli_query(conn(),$sql);
    return $res;
}

?>
