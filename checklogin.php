<?php
if ($_SERVER["REQUEST_METHOD"] != "POST")
{
		include("./login.php");
}
else
{	
	include("connection.php");
	$un = $_REQUEST["user_name"];
	$pw = $_REQUEST["password"];
	$sql = "select * from user where user_name='" . $un . "' and password='" . $pw . "'";
	$r = mysqli_query($conn,$sql);
	
	if (mysqli_num_rows($r)==1)
		{
		session_start();
		while($row = mysqli_fetch_assoc($r))
		{
			$_SESSION['username'] = $row['user_name'];
		}
//			setcookie('username',$_SESSION['username'], time()+3600);
//			setcookie('pass',$_SESSION['pass'], time()+3600);
session_start();
		header('location: main.php');
		include_once("lucy.php");
		}
	else
		{
		
		//echo "Invalid username or password. Click <a href='login.php?er=1'>here</a> to go back.";
		$i = 1;
		include("./login.php");
		}
}

?>