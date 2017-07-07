<div id="viewvehicles">
<br />
<p style="padding:0px 0px 0px 50px; margin: 0px ; font-family:Arial, Helvetica, sans-serif">
<?php echo date("Y/m/d") . "<br>"; ?>
View Vehicles>Users> <?php echo $user_name; ?>
<br />
<?php echo $user_name; ?> (profile)
<br />
<br />
</p>
<hr width="95%" style="margin:0px 0px 0px 2.5%;"/>
<center>
<br />

<h2 style="width:90%">Vehicles of the Company</h2>

<br />
<br /><table border='0' width='90%' style='min-width:500px'>
<!-- line one!-->
<?php
if (isset($_GET['pdel']))
{
	include("connection.php");
	$sql = "DELETE FROM vehicles WHERE vehicle_id = ".($_GET['pdel']);
	$r = mysqli_query($conn,$sql);

	//mysql_close($conn);
}

//////////////////////////////////////////////
//print_r ($_POST);


?>


<?php 
include("connection.php");
	$sql = "select * from vehicles ";
	$r = mysqli_query($conn,$sql);

	if (mysqli_num_rows($r)>=1)
	{	
			echo "<tr style='height:40px'><th bgcolor='#797979' style='width: 10%'>SN</th><th bgcolor='#797979' style='width: 10%'>Vehicle ID</th><th bgcolor='#797979'>Vehicle Name</th><th bgcolor='#797979'>Vehicle Model</th><th bgcolor='#797979'>Vehicle Description</th></tr>";
		$sn=0;
		while($row = mysqli_fetch_assoc($r))
		{$sn = $sn+1;
		if (isset($_GET['pedit']))
		{
			if(($_GET['pedit'])==($row['vehicle_id']))
			{
				echo ("<tr>
				<th rowspan='2' bgcolor='#dfdfdf'>".$sn."</th>
				<th rowspan='2' bgcolor='#dfdfdf'>"."<input id='edit_vehicle_id' name='edit_vehicle_id' value='".($_GET['pedit'])."' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>"."</th>
				<th rowspan='2' bgcolor='#dfdfdf'>"."<input id='edit_vehicle_name' name='edit_vehicle_name' value='".($row['vehicle_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:1;' autofocus='autofocus'/>"."</th>
				<th rowspan='2' bgcolor='#dfdfdf'>"."<input id='edit_vehicle_model' name='edit_vehicle_model' value='".($row['vehicle_model'])."' type='text' style='text-align:center; width:100%; height:100%; border:1;' />"."</th>
				<th rowspan='2' bgcolor='#dfdfdf'>"."<input id='edit_vehicle_description' name='edit_vehicle_description' value='".($row['vehicle_description'])."' type='text' style='text-align:center; width:100%; height:100%; border:1;' />"."</th>
				
				</tr>
				<tr>
				<th bgcolor='#dfdfdf' style='width: 10%'><a href='usermaindashboard.php?pg=viewvehicle&pdel=".($row['vehicle_id'])."'style='color:#a00; text-decoration: none;' >Delete</a></th>
				</tr>");

			}else{
				echo ("<tr>
				<th rowspan='2' bgcolor='#dfdfdf'>".$sn."</th>
				<th rowspan='2' bgcolor='#dfdfdf'>"."<input value='".($row['vehicle_id'])."' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>"."</th>
				<th rowspan='2' bgcolor='#dfdfdf'>"."<input id='vehicle_name' name='vehicle_name' value='".($row['vehicle_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;' disabled='disabled'/>"."</th>
				<th rowspan='2' bgcolor='#dfdfdf'>"."<input id='vehicle_model' name='vehicle_model' value='".($row['vehicle_model'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;' disabled='disabled'/>"."</th>
				<th rowspan='2' bgcolor='#dfdfdf'>"."<input id='vehicle_description' name='vehicle_description' value='".($row['vehicle_description'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;' disabled='disabled'/>"."</th>
				");
			}
		}else{
				echo ("<tr>
				<th rowspan='2' bgcolor='#dfdfdf'>".$sn."</th>
				<th rowspan='2' bgcolor='#dfdfdf'>"."<input value='".($row['vehicle_id'])."' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>"."</th>
				<th rowspan='2' bgcolor='#dfdfdf'>"."<input id='vehicle_name' name='vehicle_name' value='".($row['vehicle_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;' disabled='disabled'/>"."</th>
				<th rowspan='2' bgcolor='#dfdfdf'>"."<input id='vehicle_model' name='vehicle_model' value='".($row['vehicle_model'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;' disabled='disabled'/>"."</th>
				<th rowspan='2' bgcolor='#dfdfdf'>"."<input id='vehicle_description' name='vehicle_description' value='".($row['vehicle_description'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;' disabled='disabled'/>"."</th>
				</tr>
				<tr>
				</tr>");

		}
			//echo ($row['vehicle_name']);

		}
	}else{
		echo "<tr><th colspan='5' align='center' style='color:#F00'>Please add some vehicles first</th></tr>";

	}
?>
<input type='text' id='vehicle_id' style='visibility:hidden' name='vehicle_id' value='".($row['vehicle_id'])."' style='max-height:0%;max-width:0%; margin:0px; padding:0px;'/>
<!--

<tr><th rowspan="2">1</th><th rowspan="2">Name</th><th rowspan="2">Vehicle Model</th><th rowspan="2">Vehicle Description</th><th>tets</th></tr>
<tr><th>sfd</th></tr>
!-->
</table>

</center>
</div>
