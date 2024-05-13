<?php
require_once('db.php');
session_start();

if(isset($_POST['Register'])){
    if(empty($_POST['username'])||empty($_POST['name'])||empty($_POST['password'])||empty($_POST['phone']) || empty($_POST['email']))
    {
        echo "Fill up the form first";
    }
    else
    {
        
        $username=$_POST['username'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];

 
    }
}


function register($username,$name,$password,$phone,$email)
{
	$sql1="insert into customer (username, name, password, phone, email) 
    values ('$username','$name','$password','$phone','$email')";
	$con=conn();
	$res= mysqli_query($con,$sql1);
	if($res)
	{
		return true;
	}
	else
	{
		return false;
	}

}

 ?>