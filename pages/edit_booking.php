
<style>
#booking
{
	border:0;
	position: static;
	margin: 120px 0px 0px 17%;
	padding: 0px 0px 0px 0px;
	border-radius: 25px;
	height: 425px;
	
	


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
#edit_vehicle_service
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

<form action="edit_book_service.php?editbook=<?php echo ($_GET['bedit']);?>" id="booking" method="post" name="book" style="border: 10px solid #555;">
<center>
<input type="hidden" name="user_name" value="<?php echo $user_name; ?>"/>
<input type="hidden" id="default_date" name="default_date" value="<?php echo date("Y-m-d");?>"/>

<?php //echo date("Y-m-d");
if(!isset($_GET['bedit']))
{
	header('location: usermaindashboard.php');
}
?>
<?php
include("connection.php");
	$sql = "select * from vehicles";
	$r = mysqli_query($conn,$sql);

	if (mysqli_num_rows($r)<1)
	{	
		die (print "<h2 id='error_print'>Please add a vehicle</h2>");
				
	}
?>
<h2>Edit Booked task</h2>
<hr />
<table id = "form_table" border="0">
<tr>

<td>Vehicle Name</td>
<td><select name="edit_service_vehicle_name" id="edit_vehicle_name">
<?php 
include ("connection.php");
	$sql = "select * from vehicles ";
	$r = mysqli_query($conn,$sql);
	if (mysqli_num_rows($r)>=1)
	{
		while($row = mysqli_fetch_assoc($r))
		{
			print ("<option>".($row['vehicle_name'])."</option>");
		}
	}
?>
</select></td>
</tr>
<tr>
<td>
Task
</td>
<td>

<?php 
include ("connection.php");
	$sql = "select * from services";
	$r = mysqli_query($conn,$sql);
	if (mysqli_num_rows($r)>=1)
	{
		while($row = mysqli_fetch_assoc($r))
		{
			print ("<input type='radio' name='edit_vehicle_service' checked='checked' id='edit_vehicle_service' value='".($row['service_name'])."'/>".($row['service_name'])).(" (".($row['service_time']).") </br>");
		}
	}
?>
</select>
	</td>
<?php 
include ("connection.php");
	$sql = "select * from tasks where task_id='".($_GET['bedit'])."'";
	$r = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($r))
		{
			$old_date= (($row['task_date']));
			$old_time =(($row['task_time']));
			$old_origin=(($row['origin']));
			$old_destination=(($row['destination']));
		}

?>
</tr>
<tr>
<td>Date</td>
<td>
<input type="date" name="edit_task_date" id="edit_task_date" min="<?php echo date("Y-m-d");;?>" value="<?php echo $old_date;?>" style="height:30px; padding:0px 0px 0px 10px; margin: 10px 0px 0px 0px"/><br />
</td>
</tr>
<tr>
<td>Time</td>
<td>
<input type="time" name="edit_task_time" id="edit_task_time" value="<?php echo $old_time;?>" style="height:30px; padding: 0px 0px 0px 10px; margin: 5px 0px 10px 0px"/>
</td>
</tr>
	<tr>
		<td>Origin</td>
		<td>
			<input type="text" name="edit_origin" id="name"  required="required" value="<?php echo $old_origin?>" />
		</td>
	</tr>
	<tr>
		<td>Destination</td>
		<td>
			<input type="text" name="edit_destination" id="dest" required="required" value="<?php echo $old_destination?>" />
		</td>
	</tr>

<tr>
<td colspan="2" style="text-align:center">
<button  type="submit" value="Submit" name="edit_book_service" >Edit</button>
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

