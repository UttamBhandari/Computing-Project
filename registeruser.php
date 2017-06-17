
<?php
include "connection.php";
if(isset($_POST['submit']))
{
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_address = $_POST['address'];
$user_contact = $_POST['contact'];
$user_name = $_POST['user'];
$password = $_POST['pass'];

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
		die(header('location: register.php?error=user'));
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
					$query = "insert into user values('','$first_name','$last_name','$user_address','$user_contact','$user_name','$password')";
					if (!($conn->query($query)))
					{
						//die (print"error");
						header('location:register.php?erroruk=unknown'); //redirection
					}else{
						header('location: login.php');
					
					}
	
}
?>	