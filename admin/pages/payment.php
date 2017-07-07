<div id= "payment"><div id="viewvehicle">
<br />
<p style="padding:0px 0px 0px 50px; margin: 0px ; font-family:Arial, Helvetica, sans-serif">
<?php echo date("Y/m/d") . "<br>"; ?>
Payment>Users> <?php echo $user_name; ?>
<br />
<?php echo $user_name; ?> (profile)
<br />
<br />
</p>
<hr width="95%" style="margin:0px 0px 0px 2.5%;"/>
<center>
<br />

<h2 style="width:90%">Payment</h2>

<br />
<br /><table border='0' width='90%' style='min-width:500px'>
<!-- line one!-->



<?php
include "connection.php";
	$sql = "select * from tasks where user_name='" . $user_name . "'";
	$sql2 = "select * from services ";
	$sql3 = "select * from user where user_name='" . $user_name . "'";
	
	$r = mysqli_query($conn,$sql);
	$s = mysqli_query($conn,$sql2);
	$t = mysqli_query($conn,$sql3);
	$user_diatance = 0;
	if (mysqli_num_rows($t)>=1)
	{
	while($row3 = mysqli_fetch_assoc($t))
	{
		
	$user_diatance = ((($row3['location_dis']))* 0.621371);
	}}
	$user_mile_distance = round( $user_diatance, 3);
	
	if(($user_mile_distance)>10)
	{
		//die(print ($user_mile_distance));
		$price_per_mile = ($user_mile_distance -10) * 0.5;

		$costumer_price = round( $price_per_mile, 2);
			//die(print ($costumer_price));	
		
	}else{
		$costumer_price = 0;
	}
	
	if (mysqli_num_rows($s)>=1)
	{
		$i=0;
		while($row2 = mysqli_fetch_assoc($s))
		{
			$service[$i] = ($row2['service_name']);
			$prices[$i] = ($row2['service_price']);
		//	print ($service[$i]);
			$i=$i+1;
		}
	}


	if (mysqli_num_rows($r)>=1)
	{
		echo "<tr style='height:40px'>
		<th bgcolor='#797979' style='width: 10%'>SN</th>
		<th bgcolor='#797979' style='width: 10%'>Vehicle Name</th>
		<th bgcolor='#797979'>Service</th>
		<th bgcolor='#797979'>Date</th>
		<th bgcolor='#797979'>Additional charge</th>
		<th bgcolor='#797979'>Price</th>
		<th bgcolor='#797979'>No. of package</th>
		<th bgcolor='#797979'>Total Price</th>
		</tr>";	
		$sn=0;
		$total_price[]=0;
		while($row = mysqli_fetch_assoc($r))
		{$sn = $sn+1;
echo"
<tr>
				<th  bgcolor='#dfdfdf'>".$sn."</th>
				<th  bgcolor='#dfdfdf'>"."<input value='".($row['vehicle_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>"."</th>
				<th  bgcolor='#dfdfdf'>"."<input id='vehicle_name' name='vehicle_name' value='".($row['service_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;' disabled='disabled'/>"."</th>
				<th  bgcolor='#dfdfdf'>"."<input id='vehicle_name' name='vehicle_name' value='".($row['task_date'])." | ".($row['task_time'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;' disabled='disabled'/></th>";
for($i=0;$i<4;$i++)
{
	if(($row['service_name']) ==$service[$i])
	{
	$current_price = $prices[$i];
	//echo $prices[$i];
	}
}
				echo"<th  bgcolor='#dfdfdf'>"."<input id='vehicle_name' name='vehicle_name' value='".$costumer_price." £' type='text' style='text-align:center; width:100%; height:100%; border:0;' disabled='disabled'/>"."</th>
				
				<th  bgcolor='#dfdfdf'>"."<input id='vehicle_name' name='vehicle_name' value='".$current_price." £' type='text' style='text-align:center; width:100%; height:100%; border:0;' disabled='disabled'/>"."</th>
				
				<th  bgcolor='#dfdfdf'>"."<input id='vehicle_name' name='vehicle_name' value='x ".($row['times_of_task'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;' disabled='disabled'/></th>";
				$total_price[$sn-1]=((($row['times_of_task'])*$current_price) + $costumer_price );
				
				echo"<th  bgcolor='#dfdfdf'>"."<input id='vehicle_name' name='vehicle_name' value='".($total_price[$sn-1])." £' type='text' style='text-align:center; width:100%; height:100%; border:0;' disabled='disabled'/>"."</th>
				</tr>";
		}
	}
?>

<?php

if(mysqli_num_rows($r)>=1)
{
	print "<tr>
<th colspan='7'>
Grand Total: ";
$total = 0;
for($i=0;$i<count($total_price);$i++)
{
	$total = $total + $total_price[$i];
	//print $total_price[$i];
	//print "<br>";
	

print "

</th>
<th>";
 print($total);
print " £"; 
}}else{
echo "<tr><th colspan='5' align='center' style='color:#F00'>Please add some tasks first</th></tr>";
}

?>
</th>
</tr>
<!--

<tr><th rowspan="2">1</th><th rowspan="2">Name</th><th rowspan="2">Vehicle Model</th><th rowspan="2">Vehicle Description</th><th>tets</th></tr>
<tr><th>sfd</th></tr>
!-->
</table>

</center>
</div>


</script></div>