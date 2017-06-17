
<style>
#booking
{
	margin: 0px;
	padding:0px;
	border:0;
	border-radius:0px;
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
#pet_service
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
<input type="hidden" name="user_name" value="<?php echo $first_name; ?>"/>
<input type="hidden" id="default_date" name="default_date" value="<?php echo date("Y-m-d");?>"/>

<?php //echo date("Y-m-d");?>
<?php
/*
include("connection.php");
	$sql = "select * from user where $first_name='" . $first_name . "'";
	$r = mysqli_query($conn,$sql);

	if (mysqli_num_rows($r)<1)
	{	
		die (print "<h2 id='error_print'>Please add a pet</h2>");
				
	}
*/
?>
<h2>Book a Cabs</h2>
<hr />
<table id = "form_table" border="0">
<!--<tr>

<td>Pet Name</td>
<td><select name="service_pet_name" id="pet_name">
</*?php
include ("connection.php");
	$sql = "select * from pets where user_name='" . $user_name . "'";
	$r = mysqli_query($conn,$sql);
	if (mysqli_num_rows($r)>=1)
	{
		while($row = mysqli_fetch_assoc($r))
		{
			print ("<option>".($row['pet_name'])."</option>");
		}
	}
	*/
?>
</select></td>
</tr>
<tr>
<td>
Vehicle
</td>
-->
<td>

<?php
include ("connection.php");
	$sql = "select * from vehicle";
	$r = mysqli_query($conn,$sql);
	if (mysqli_num_rows($r)>=1)
	{
		while($row = mysqli_fetch_assoc($r))
		{
			print ("<option>".($row['vehicle_name'])."</option>");
		}
	}
?>
	<tr>
		<td>Origin</td>
		<td>
			<input type="text" name="origin" id="origin" min="1" value="" max="255" style="height: 30px"/>
		</td>
	</tr>
	<tr>
		<td>Destination</td>
		<td>
			<input type="text" name="destination" id="destination" min="1" value="" max="255" style="height: 30px"/>
		</td>
	</tr>

<tr>
<td>Date</td>
<td>
<input type="date" name="task_date" id="task_date" min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" style="height:30px; padding:0px 0px 0px 10px; margin: 10px 0px 0px 0px"/><br />
</td>
</tr>
<tr>
<td>Time</td>
<td>
<input type="time" name="task_time" id="task_time" value="00:00" style="height:30px; padding: 0px 0px 0px 10px; margin: 5px 0px 10px 0px"/>
</td>
</tr>

<tr>
<td colspan="2" style="text-align:center">
<button  type="submit" value="Submit" name="book_service" >Book</button>
</td>
</tr>
</td>
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

