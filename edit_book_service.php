<?php
include "connection.php";
if(isset($_REQUEST['edit_book_service']))
{
    $edit_origin = $_POST['edit_origin'];
    $edit_destination= $_POST['edit_destination'];
	$edit_service_vehicle_name = $_POST['edit_service_vehicle_name'];
	$edit_vehicle_service = $_POST['edit_vehicle_service'];
	$edit_task_date = $_POST['edit_task_date'];
	$edit_task_time = $_POST['edit_task_time'];
	$user_name = $_POST['user_name'];
	$current_date = $_POST['default_date'];
	if ($edit_task_date<=$current_date)
	{
		header('location: usermaindashboard.php?pg=editbook&error=time');
		die(print"error");
	}else{
		$sql = "UPDATE tasks SET vehicle_name = '','".$edit_origin."','".$edit_destination."','".$edit_service_vehicle_name."', service_name = '".$edit_vehicle_service."', task_date = '".$edit_task_date."', task_time = '".$edit_task_time."' WHERE task_id = ".($_GET['editbook'])."";
		$r = mysqli_query($conn,$sql);	
	}

	echo $user_name;
}
header('location: usermaindashboard.php?pg=home');
?>