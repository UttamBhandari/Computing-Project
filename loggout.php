<?php 
//if (isset($_SESSION["username"])){
session_start();
$_SESSION['username'] = " ";
print_r ($_SESSION);
	//session_destroy(); 
//}
//die(print "error");
session_destroy();
header('location: main.php');

?>