<?php
include("../functions/myfunctions.php");
if(isset($_SESSION['auth']))
{
    if($_SESSION['role_as'] != 1){
        redirect("Your are not authorized to access this page","../index.php");
    }
}
else
{
            redirect("Login To Continue","../login.php");
}




?>