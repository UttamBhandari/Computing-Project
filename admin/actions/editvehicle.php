<?php
//print_r ($_GET);
include "../../connection.php";
if (isset($_GET['epn']))
{
    $edit_vehicle_name = $_GET['epn'];
    print ($edit_vehicle_name);
    $sql = "UPDATE vehicles SET vehicle_name = '".$_GET['epn']."' WHERE vehicle_id = ".($_GET['epid'])."";
    $r = mysqli_query($conn,$sql);
}

if (isset($_GET['ept']))
{
    $edit_vehicle_model = $_GET['ept'];
    print ($edit_vehicle_model);
    $sql = "UPDATE vehicles SET vehicle_model = '".$_GET['ept']."' WHERE vehicle_id = ".($_GET['epid'])."";
    $r = mysqli_query($conn,$sql);
}

if (isset($_GET['epb']))
{
    $edit_vehicle_description = $_GET['epb'];
    print ($edit_vehicle_description);
    $sql = "UPDATE vehicles SET vehicle_description = '".$_GET['epb']."' WHERE vehicle_id = ".($_GET['epid'])."";
    $r = mysqli_query($conn,$sql);
}


header('location: ../index.php?pg=viewvehicles');





?>