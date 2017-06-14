<html>
<head>
  <title>Cars and Cabs  Login </title>
  <link type="text/css" rel="stylesheet" href="css/stylesheetlogin.css"/>
  
</head>


<script>
function frval()
{
	//var a= document.getElementById("user_name").value;
	var name =document.forms["myfrm"]["user_name"].value;
	var pass =document.forms["myfrm"]["password"].value;
	if(name == "")
	{
		alert("Enter your Username");
	}
	if(pass == "")
	{
		alert("Enter your Password");
	}
}
</script>
<body>	

  <div id="bg" ></div>
  </br></br>
  <form action="checklogin.php" method="POST" name="myfrm">
  <H1 style="text-align: center; font-family: Arial">LOG IN</H1>
    <hr>
<?php
if (isset($i))
{
	 ?>
     <div id="print_error" >Error Logging In<br>Please retry</div>
     <?php
	
}else{
}
?>
	<p></p>
	<input type="text" name="user_name"  placeholder="EMAIL" >
  <input type="password" name="password"  placeholder="PASSWORD" >

	<p></p>
	
  <button type="submit" value="Submit" onClick="return frval()">LOG IN</button>
   <p></p>
   <a href="register.php" style="margin-left:4.5em; font-size: 0.80em;"><b>Register A New Account</b></a>
</form>

</body>
</html>
	