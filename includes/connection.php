<?php

$userName = "root";
$dbPassword = "";
$dbHostName = "localhost";
$dbName = "test";

$con=mysqli_connect($dbHostName,$userName,$dbPassword);

if($con){
        $db = mysqli_select_db($con,$dbName);
        
    if($db){
        
    }else{
        echo "database selection failed...";
    }
}else{
    echo"connection failed...";
}
?>