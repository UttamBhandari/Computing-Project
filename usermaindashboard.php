<?php

	session_start();
	//print_r($_SESSION);
	
	if(!isset($_SESSION['username']))
	{
		die(header('location: ./login.php'));
	}
	//die (print "error");

	
	$user_name = $_SESSION['username'];
if ($user_name==' '){
    die(header('location: ./login.php'));
}


if ($user_name=='admin'){
    die(header('location: ./admin/'));
}


if (isset($_GET['pg']))
{
	$page_number=$_GET['pg'];
	
}else{
	$page_number="home";
}

?>
<html>
<head> <title>Cars and Cabs Reservation System</title>
<script src="js/my_js.js"></script>

<link type="text/css" rel="stylesheet" href="css/car_style.css"/></head>
<body class="login">

<div id="main">
<div id="header">

<div id= "logo">
<img src="./images/logo.png"></div>

 <ul >
  <li><a class="active" href="usermaindashboard.php?pg=home">Home</a></li>
  <li><a href="usermaindashboard.php?pg=booking">Booking For Cars</a></li>
     <li><a href="usermaindashboard.php?pg=bookingcab">Booking For Cabs</a></li>
    <li>
    <a href="usermaindashboard.php?pg=viewvehicles">Vehicles</a>
  </li>
  
  <li><a href="usermaindashboard.php?pg=about">About</a></li>
  <li><a href="usermaindashboard.php?pg=payment">Payment</a></li>
  
  <li style="float: right; margin:0px 5% 0px 0px"><a href="loggout.php">Log Out</a></li>
  </ul>
</div >

  <div id="call">
  <?php 
echo $page_number;
if (isset($page_number))
{
	switch($page_number)
	{
		case "home":
		include("pages/home.php");
		break;

		case "booking":
		include("pages/bookcars.php");
		break;

        case "bookingcab":
            include("pages/bookcabs.php");
            break;
				
		case "about":
		include("pages/about.php");
		break;

		case "payment":
		include("pages/payment.php");
		break;
		
		case "viewvehicles":
		include("pages/viewvehicles.php");
		break;
		
		case "editbook":
		include("pages/edit_booking.php");
		break;

		default:
		include("pages/home.php");
		break;
		
		
	}
}

  ?>
  </div>
</div>
</body>
</html>