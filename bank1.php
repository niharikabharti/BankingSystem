<?php
   $serverName = "localhost";
   $userName="root";
   $password ="";
   $dbName ="test";
   //create connection

   $con = mysqli_connect($serverName,$userName,$password, $dbName);
    if(mysqli_connect_errno()){
    	echo "Failed to connect";
    	exit();
    }
    echo "Connection success!!!";
?>