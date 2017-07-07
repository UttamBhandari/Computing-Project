<?php

session_start();
//print_r($_SESSION);

if(!isset($_SESSION['username']))
{
    header('location: login.php');
}
$user_name = $_SESSION['username'];
//die (print "error");
if ($user_name==' '){
    die('location: ./login.php');
}




if ($user_name=='admin'){
    die(header('location: ./admin/'));
}

else{
    die(header('location: ./usermaindashboard.php'));
    include_once("./usermaindashboard.php");
}


?>