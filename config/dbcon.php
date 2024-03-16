<?php

    $host = "localhost:3306";
    $username = "vcaszeoc_root";
    $password = "HsGoQ+w8*gE1";
    $database = "vcaszeoc_agritech";


    // Creating database connection
    $con = mysqli_connect($host,$username,$password,$database);

    // Check databse connection
    if(!$con)
    {
        die("Connection Failed: " . mysqli_connect_error());
    } 
    // else{echo "hello Sql";}
    
?>