<?php
include "connection.php";
if(isset($_REQUEST['book_service']))
{
    $add_origin = $_POST['origin'];
    $add_destination = $_POST['destination'];
	$add_service_vehicle_name = $_POST['service_vehicle_name'];
    $add_vehicle_type = $_POST['vehicle_type_id'];
	$add_vehicle_service = $_POST['add_vehicle_service'];
	$add_task_date = $_POST['task_date'];
	$add_task_time = $_POST['task_time'];
	$user_name = $_POST['user_name'];
	$current_date = $_POST['default_date'];

    include "/distance/index.php";

	if ($add_task_date<=$current_date)
	{
		header('location: usermaindashboard.php?pg=booking&error=time');
		die(print"error");
	}else{

        $sql = "insert into tasks values('','$add_origin','$add_destination','$add_service_vehicle_name','$add_vehicle_service','$add_task_date','$add_task_time','$user_name','$add_vehicle_type','$a')";
		$r = mysqli_query($conn,$sql);
        if((!$sql)||(!$r))
        {
            //die(print "error");
        }
	}
	
	//$sql = "insert into tasks values('','$add_service_vehicle_name','$add_vehicle_service','$add_task_date','$add_task_time','$add_task_times_bedone','$user_name')";
	//$r = mysqli_query($conn,$sql);
	echo $user_name;
}

header('location: usermaindashboard.php?pg=home');
?>