<style>
#booking
{
	border:0;
	position: static;
	margin: 120px 0px 0px 17%;
	padding: 0px 0px 0px 0px;
	border-radius: 25px;
	height: 500px;
}
#task_times
{
	width: 50%;
}
h2 
{
	width: 95%;
	margin: 5px;
}
hr
{
	width: 90%;

}
#vehicle_service
{
	margin:0px 0px 0px 0px;
	padding: 0px;
	width: 15%;
}
#form_table
{
	width: 80%;
}
#error_print{
	color:#f00;
}
</style>

<div id="booking" style="padding:0px;">

	<form action="book_service.php" id="booking" method="post" name="book" style="border: 10px solid #555;">
<center>
<input type="hidden" name="user_name" value="<?php echo $user_name; ?>"/>
<input type="hidden" id="default_date" name="default_date" value="<?php echo date("Y-m-d");?>"/>

<?php //echo date("Y-m-d");?>
<?php
include("connection.php");
	$sql = "select * from vehicles";
	$r = mysqli_query($conn,$sql);

	if (mysqli_num_rows($r)<1)
	{
		die (print "<h2 id='error_print'>Please add a vehicle</h2>");
	}
?>
<h2>Book for destination</h2>
<hr />
<table id = "form_table" border="0">

<tr>

<td>Vehicle Name:</td>
<td><select name="service_vehicle_name" id="vehicle_name">
<?php 
include ("../connection.php");
	$sql = "select * from vehicles where vehicle_type_id=1 ";
	$r = mysqli_query($conn,$sql);
	if (mysqli_num_rows($r)>=1)
	{
		while($row = mysqli_fetch_assoc($r)) {

			print ("<option>" . ($row['vehicle_name']) . "</option>");

		}
	}
?>

</select></td>
	<td >
		<input type="text" id="vehicle_type_id" name="vehicle_type_id" value="1" hidden="hidden">
	</td>
</tr>
<tr>
<td>
Service
</td>
<td colspan="2">

<?php
include ("connection.php");
	$sql = "select * from services";
	$r = mysqli_query($conn,$sql);
	if (mysqli_num_rows($r)>=1)
	{
		while($row = mysqli_fetch_assoc($r))
		{
			print ("<input type='radio' name='add_vehicle_service' checked='checked' id='vehicle_service' value='".($row['service_name'])."'/>".($row['service_name'])).(" (".($row['service_km']).") </br>");
		}
	}
?>
</select>
</td>
</tr>

<tr>
<td>Date</td>
<td colspan="2">
<input type="date" name="task_date" id="task_date" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" style="height:30px; padding:0px 0px 0px 10px; margin: 10px 0px 0px 0px"/><br />
</td>
</tr>
<tr>
<td>Time</td>
<td colspan="2">
<input type="time" name="task_time" id="task_time" value="00:00" style="height:30px; padding: 0px 0px 0px 10px; margin: 5px 0px 10px 0px"/>
</td>
</tr>
	<tr>
		<td>Origin</td>
		<td colspan="2">
			<input type="text" name="origin" id="name"  required="required" placeholder="Please enter origin"/>
		</td>
	</tr>
	<tr>
		<td>Destination</td>
		<td colspan="2">
			<input type="text" name="destination" id="dest" required="required" placeholder="Please enter destination"/>
		</td>
	</tr>
<tr>
<td colspan="3" style="text-align:center">
<button  type="submit" value="Submit" name="book_service" >Book</button>
</td>
</tr>
</table>

</center>
</form>
</div>

<?php 
if (isset($_GET['error']))
{
	echo "<script>alert('We do not book any task on the same date!!!! ');</script>";
}
?>

