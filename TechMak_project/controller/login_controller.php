<?php

require_once ('../model/logindb.php');
session_unset();
session_destroy();
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$status=login($username,$password);
if($status)
{
    $_SESSION['user'] = $status;
    header('location:../view/home/home.php');
}
else
{
    echo "Invalid User";
}



?>