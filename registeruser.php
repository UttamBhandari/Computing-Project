
<?php
include "connection.php";
if(isset($_POST['register']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$add = $_POST['address'];
$cont = $_POST['contact'];
$username = $_POST['user'];
$user_password = $_POST['pass'];

//die(print_r($_POST));
include "./distance/index.php";


$sql2 = "select * from user";
$r = mysqli_query($conn,$sql2);
$user_list[]=0;
$pass_id = 0;
	if (mysqli_num_rows($r)>=1)
	{
		$sn=0;
		while($row = mysqli_fetch_assoc($r))
		{
			$user_list[$sn]= $row['user_name'];
			$sn =$sn +1;
		}
	}
	for($i=0;$i<count($user_list);$i++)
	{
	if(($user_list[$i]) == $username)
	{
		mysqli_close($conn);
		die(header('location: login.php?error=user'));
	}else{
		mysqli_close($conn);
		$pass_id = 1;
			//die(print"bb_close");
			}
	
	}
}

if($pass_id == 1)
{
			include "connection.php";
					$query = "insert into user values('','$fname','$lname','$add','$cont','$user_password','$username','$a')";
					if (!($conn->query($query)))
					{
						//die (print"error");
						header('location:login.php?erroruk=unknown'); //redirection
					}else{
						header('location: usermaindashboard.php');
					
					}
	
}
?>	