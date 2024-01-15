<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "agritech";


    // Creating database connection
    $con = mysqli_connect($host,$username,$password,$database);

    // Check databse connection
    if(!$con)
    {
        die("Connection Failed: " . mysqli_connect_error());
    } 
    // else{echo "hello Sql";}
    
?>