<?php 
include("connection.php");
?>
<html>
<head> <title>Cars and Cars User Registration</title>
<link type="text/css" rel="stylesheet" href="css/registerform.css"/>

<script>
function frmval()
{
	//var a= document.getElementById("first_name").value;
	var name =document.forms["myfrm"]["first_name"].value;
	var name =document.forms["myfrm"]["last_name"].value;
	var add =document.forms["myfrm"]["address"].value;
	var cont =document.forms["myfrm"]["contact"].value;
	var user =document.forms["myfrm"]["user"].value;
	var password =document.forms["myfrm"]["pass"].value;
	if(name == "")
	{
		alert("!!!Enter Full Name!!!");
		return false;
	}
	if(add == "")
	{
		alert("!!!Provide your address!!!");
		return false;
	}
	if(cont == "")
	{
		alert("!!!Enter your Contact Number!!!");
		return false;
	}
	if(user == "")
	{
		alert("!!!Enter username!!!");
		return false;
	}
	if(password == "")
	{
		alert("!!!Enter Password!!!");
		return false;
	}
}
</script></head>
<body class="login">
<div id="main">
<div id="header">
<div id= "logo"><img src="./images/logo.png"></div>
</div>
<div id="lower_body">
<table class="table_ss" border="0" align="center" style = "padding:15px 15px 15px 15px;">

<form action="registeruser.php" method="POST" name="myfrm" > 
<tr><th colspan="2" style="font-size: 30px; font-family:Arial, Helvetica, sans-serif">Registration</th></tr>
<tr><td  colspan="2"> </td></tr>
<tr><td  colspan="2"><hr></td></tr>
<tr><<td  colspan="2"> </td></tr>
<tr ><td>First Name:</td><td> <input type="text" name="first_name"></td></tr>
<tr><td><br> </td><td> </td></tr>
<tr><td>Last Name:</td><td> <input type="text" name="last_name"></td> <br></tr>
<tr><td><br> </td><td> </td></tr>
<tr><td>Address:</td><td> <input type="text" name="address"></td> <br></tr>
<tr><td><br> </td><td> </td></tr>
<tr ><td>Contacts:</td><td> <input type="text" name="contact"></td> <br></tr>
<tr><td><br> </td><td> </td></tr>
<tr ><td>UserName:</td><td> <input type="text" name="user"></td> <br></tr>
<tr><td><br> </td><td> </td></tr>
<tr ><td>Password:</td><td> <input type="password" name="pass"></td> <br></tr>

<tr><td><br> </td><td> </td></tr>
<tr ><td></td><td><button class="" type="submit" value="Submit" name="submit" onClick="return frmval()">REGISTER</button></td> </tr>
<tr><td colspan="2" align="center" style="font-size:0.8em"><a href="./login.php">Back to LOGIN </a></td> <br></tr>
<tr><td> </td><td> </td></tr>
</form> 
</table>
</div>
</body> 
</html>
<?php
if(isset($_GET['error']))
{
	echo"<script>alert('Username already exists please try something else');</script>";
}

?>
<?php
if(isset($_GET['errorloc']))
{
	echo"<script>alert('Please enter a valid location');</script>";
}

?>