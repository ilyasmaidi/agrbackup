<?php
include(__DIR__ . '../../config/dbcon.php');

// include('../config/dbcon.php');

// include('../config/dbcon.php');

function GetAll($table){
    global $con;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($con, $query);
}

function GetByID($table, $id){
    global $con;
    $query = "SELECT * FROM $table WHERE id='$id'";
    return $query_run = mysqli_query($con, $query);
}

function redirect($message, $url){
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}

?>
