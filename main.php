<?php

	session_start();
	//print_r($_SESSION);

	if(!isset($_SESSION['username']))
	{

		header('location: login.php');
	}
	//die (print "error");


	$user_name = $_SESSION['username'];


if (isset($_GET['pg']))
{
	$page_number=$_GET['pg'];

}else{
	$page_number="home";
}

?>
<html>
<head> <title>Pet Services</title>
<script src="js/my_js.js"></script>

<link type="text/css" rel="stylesheet" href="lucystyle.css"/></head>
<body class="login">
<div id="abc" style="
<?php
if (isset($_GET['tab']))
{
	if (($_GET['tab']) == "addPet")
	{
		echo ("	visibility: visible;");
	}
}else{
		echo ("	visibility: hidden;");
	
}
?>
">
<!-- Popup Div Starts Here -->
<div id="popupContact"
<!-- Contact Us Form -->
<form action="#" id="popup" method="post" name="form" >
<img id="close" src="./images/exit_btn.png" style="height:50px; width:50px" onclick ="div_hide()">
<br>
<h2>Add Pets</h2>
<hr>
<input type="text" value="<?php echo($user_name) ;?>" id="user" type="text" style="visibility:hidden">
<br>
<table>
<tr><td>Pet Name: </td><td><input id="pet_name" name="pet_name" placeholder="Name" type="text"></td></tr>
<tr><td>Pet Type: </td><td><input id="pet_type" name="pet_type" placeholder="Type" type="text"></td></tr>
<tr><td>Pet Breed: </td><td><input id="pet_breed" name="pet_breed" placeholder="Breed" type="text"></td></tr>
<tr><td></td><td><a href="javascript:%20check_empty()" id="submit">Add</a></td></tr>

</table>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
<div id="main">
<div id="header">

<div id= "logo">
<img src="./images/logo.png"></div>

 <ul >
  <li><a class="active" href="main.php?pg=home">Home</a></li>
  <li><a href="main.php?pg=booking">Booking</a></li>
    <li class="drop_down_div">
    <a href="" class="pets_btn">Pets</a>
    <div class="pet_menu">
      <a id="popup"href="<?php print ("main.php?pg=" .$page_number . "&tab=addPet"); ?>" >Add Pet</a>
      <a href="main.php?pg=viewpet">View Pets</a>
    </div>
  </li>
  
  <li><a href="main.php?pg=about">About</a></li>
  <li><a href="main.php?pg=payment">Payment</a></li>
  
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
		include("pages/booking.php");
		break;
				
		case "about":
		include("pages/about.php");
		break;
		case "pets":
		include("pages/pets.php");
		break;
		
		case "payment":
		include("pages/payment.php");
		break;
		
		case "viewpet":
		include("pages/viewpet.php");
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