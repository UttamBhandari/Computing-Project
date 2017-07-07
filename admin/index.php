<?php

	session_start();
	//print_r($_SESSION);
	
	if(!isset($_SESSION['username']))
{
    die(header('location: ../login.php'));
}
	//die (print "error");

	
	$user_name = $_SESSION['username'];
    if ($user_name==' ')
    {
        die(header('location: ./login.php'));
    }


if ($user_name!='admin'){

    die(header('location: ../usermaindashboard.php'));
    include_once("usermaindashboard.php");
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
<script src="../js/my_js.js"></script>

<link type="text/css" rel="stylesheet" href="../css/car_style.css"/></head>
<body class="login">

<div id="main">
<div id="header">

<div id= "logo">
<img src="./images/logo.png"></div>

 <ul >
  <li><a class="active" href="index.php?pg=home">Home</a></li>
     <li class="drop_down_div">
         <a href="" class="vehicles_btn">Vehicles</a>
         <div class="vehicle_menu">
             <a id="popup"href="index.php?pg=vehicles" >Add Vehicle</a>
             <a href="index.php?pg=viewvehicles">View Vehicles</a>
         </div>
     </li>
  
  <li><a href="index.php?pg=about">About</a></li>
     <li><a href="index.php?pg=payment">Payment</a></li>
  <li style="float: right; margin:0px 5% 0px 0px"><a href="../loggout.php">Log Out</a></li>
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

		case "about":
		include("../pages/about.php");
		break;

        case "vehicles":
            include("pages/vehicles.php");
            break;

		case "viewvehicles":
		include("pages/viewvehicles.php");
		break;

        case "payment":
            include("pages/payment.php");
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