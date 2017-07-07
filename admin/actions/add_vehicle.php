<?php
include ("../../connection.php");
if(isset($_REQUEST['vehicle_add']))
{
    $add_vehicle_name= $_POST['vehicle_name'];
    $add_vehicle_model = $_POST['vehicle_model'];
    $add_vehicle_description = $_POST['vehicle_description'];
    $add_vehicle_type = $_POST['value'];
    $user_name = $_POST['user_name'];

        $sql = "insert into vehicles values('','$add_vehicle_model','$add_vehicle_description','$add_vehicle_name','$user_name','$add_vehicle_type')";
        $r = mysqli_query($conn,$sql);

    //$sql = "insert into tasks values('','$add_service_vehicle_name','$add_vehicle_service','$add_task_date','$add_task_time','$add_task_times_bedone','$user_name')";
    //$r = mysqli_query($conn,$sql);

}
header('location: ../index.php?pg=viewvehicles');
?>