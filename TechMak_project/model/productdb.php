<?php
require_once('db.php');

function listProduct(){
    return conn()->query("SELECT * FROM products")->fetch_all();
}
function searchProduct($value){
    $data = conn()->query("SELECT * FROM products WHERE name='%".$value."%'");
    if($data->num_rows > 0){
        return $data->fetch_all();
    }
    return [];
}


function showProduct(){

}


?>
