<?php
session_start();
require_once('db.php');
if(isset($_POST['Login']))
{

if( empty($_POST['$username']) || empty($_POST['$password']))
{
    echo "Fill up the form first";
}
else
{
    $username=$_POST['$username'];
    $username=$_POST['$username'];



}


}



function login($username,$password)
{
    $sql="select * from customer where username='$username' and password='$password'";
	$con=conn();
    $res= mysqli_query($con,$sql);
	$row=mysqli_num_rows($res);
	if($row==1)
	{
		return mysqli_fetch_assoc($res);
	}
	else
	{
		return false;
	}
}

?>

