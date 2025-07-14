<?php

    $server = "localhost";
    $username = "root";
    $password = "";


    $connection = mysqli_connect($server, $username, $password);

    if(!$connection){
        echo "connection not establish" . mysqli_connect_error();
    }
    else{
        echo "connection successfully";
    }
    
?>