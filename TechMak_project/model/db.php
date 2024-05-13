<?php

function conn()
{
    $serverName="localhost";
    $userName="root";
    $pass="";
    $dbName="tech_mak";
    $connection=new mysqli($serverName,$userName,$pass,$dbName); 
    return $connection;

}
   


?>