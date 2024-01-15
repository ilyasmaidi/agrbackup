<?php
include('config/dbcon.php');

function GetAll($table){
    global $con;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($con, $query);
}


?>
