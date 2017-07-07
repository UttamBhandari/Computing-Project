<div id="home">
<br />
<p style="padding:0px 0px 0px 50px; margin: 0px ; font-family:Arial, Helvetica, sans-serif">
<?php echo date("Y/m/d") . "<br>"; ?>
Home>Users> <?php echo $user_name; ?>
<br />
<?php echo $user_name; ?> (profile)
<br />
<br />
</p>
<hr width="95%" style="margin:0px 0px 0px 2.5%; padding:0px"/>
<center>
<br />

<h2 style="width:90%">Activities</h2>


<br />
<br /><table border="0" width="90%" style="min-width:500px;height:40px">
<?php
$date= date(' Y-m-d ');
//$tomorrow = date_format($date,"Y-m-d");
//echo $current_full_date;

?>
<!-- line one!-->
<?php 
include("../connection.php");
	$sql = "select * from tasks ";
	$r = mysqli_query($conn,$sql);

		if (mysqli_num_rows($r)>=1)
	{
		echo "<tr style='height:40px'>
<th bgcolor='#797979' style='width: 7.5%; max-width: 7.5%'>SN</th>
<th bgcolor='#797979' style='width: 7.5%; max-width: 7.5%'>Task ID</th>
<th bgcolor='#797979' style='width: 20%; max-width: 20%'>Date & Time</th>
<th bgcolor='#797979' style='width: 15%; max-width: 15%'>Vehicle</th>
<th bgcolor='#797979' style='width: 30%; max-width: 30%'>Task</th>
<th bgcolor='#797979' style='width: 30%; max-width: 30%'>Username</th>
</tr>";
$sn=0;
		while($row = mysqli_fetch_assoc($r))
		{$sn = $sn+1;
		if( ($row['task_date']) > $date)
		{
		//echo "hehe";
		//echo "<br>";	
		}else{
			print ":(";
			print "<br>";
		}
		date_default_timezone_set("Asia/Kathmandu");
		$current_date = date("Y-m-d");
		$user_defined_date = $row['task_date'];
		
		$current_time = date("H:i");
		$user_defined_time = $row['task_time'];
	//	print ($user_defined_time>$current_time);
	//	print $user_defined_time;
	//	print "<br>";
		$current_day = date("l", mktime(0, 0, 0, 7, 1, 2000));
		//$current_day = mktime(date("l")+1);
			//print_r($row['vehicle_name']);
			if( ($user_defined_time>$current_time))
			{
				if(($user_defined_date>=$current_date))
				{
				
			echo "<tr>
<th bgcolor='#61c66b' style='width: 10%; height:35px'>
".$sn."
</th>
<th bgcolor='#61c66b' style='width: 10%; height:35px'>
<input id='edit_task_id' name='edit_task_id' value='".($row['task_id'])."' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>
</th>
<th bgcolor='#61c66b' style='width: 10%; height:35px'>
<input id='edit_task_date' name='edit_task_date' value='".($row['task_date'])." | ".($row['task_time'])."' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>
</th>
<th bgcolor='#61c66b' style='width: 10%; height:35px'>
<input id='edit_task_date' name='edit_task_date' value='".($row['vehicle_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>
</th>
<th bgcolor='#61c66b' style='width: 10%; height:35px'>
<input id='edit_task_date' name='edit_task_date' value='".($row['service_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>
</th>
<th bgcolor='#61c66b' style='width: 10%; height:35px'>
<input id='user_name' name='user_name' value='".($row['user_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>
</th>

</th>
</tr>";
				}else{
					echo "<tr>
<th bgcolor='#c66461' style='width: 10%; height:35px'>
".$sn."
</th>
<th bgcolor='#c66461' style='width: 10%; height:35px'>
<input id='edit_task_id' name='edit_task_id' value='".($row['task_id'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;background-color:#c66461' disabled='disabled'/>
</th>
<th bgcolor='#c66461' style='width: 10%; height:35px'>
<input id='edit_task_date' name='edit_task_date' value='".($row['task_date'])." | ".($row['task_time'])." ' type='text' style='text-align:center; width:100%; height:100%; border:0;background-color:#c66461' disabled='disabled'/>
</th>
<th bgcolor='#c66461' style='width: 10%; height:35px'>
<input id='edit_task_date' name='edit_task_date' value='".($row['vehicle_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;background-color:#c66461' disabled='disabled'/>
</th>
<th bgcolor='#c66461' style='width: 10%; height:35px'>
<input id='edit_task_date' name='edit_task_date' value='".($row['service_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;background-color:#c66461' disabled='disabled'/>
</th>
<th bgcolor='#c66461' style='width: 10%; height:35px'>
<input id='user_name' name='user_name' value='".($row['user_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;background-color:#c66461' disabled='disabled'/>
</th>

</tr>";
					
				}
		}else{
			
				if(($user_defined_date<=$current_date))
				{
			echo "<tr>
<th bgcolor='#c66461' style='width: 10%; height:35px'>
".$sn."
</th>
<th bgcolor='#c66461' style='width: 10%; height:35px'>
<input id='edit_task_id' name='edit_task_id' value='".($row['task_id'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;background-color:#c66461' disabled='disabled'/>
</th>
<th bgcolor='#c66461' style='width: 10%; height:35px'>
<input id='edit_task_date' name='edit_task_date' value='".($row['task_date'])." | ".($row['task_time'])." ' type='text' style='text-align:center; width:100%; height:100%; border:0;background-color:#c66461' disabled='disabled'/>
</th>
<th bgcolor='#c66461' style='width: 10%; height:35px'>
<input id='edit_task_date' name='edit_task_date' value='".($row['vehicle_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;background-color:#c66461' disabled='disabled'/>
</th>
<th bgcolor='#c66461' style='width: 10%; height:35px'>
<input id='edit_task_date' name='edit_task_date' value='".($row['service_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;background-color:#c66461' disabled='disabled'/>
</th>
<th bgcolor='#c66461' style='width: 10%; height:35px'>
<input id='user_name' name='user_name' value='".($row['user_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0;background-color:#c66461' disabled='disabled'/>
</th>

</tr>";
				}else{
echo "<tr>
<th bgcolor='#61c66b' style='width: 10%; height:35px'>
".$sn."
</th>
<th bgcolor='#61c66b' style='width: 10%; height:35px'>
<input id='edit_task_id' name='edit_task_id' value='".($row['task_id'])."' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>
</th>
<th bgcolor='#61c66b' style='width: 10%; height:35px'>
<input id='edit_task_date' name='edit_task_date' value='".($row['task_date'])." | ".($row['task_time'])." ' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>
</th>
<th bgcolor='#61c66b' style='width: 10%; height:35px'>
<input id='edit_task_date' name='edit_task_date' value='".($row['vehicle_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>
</th>
<th bgcolor='#61c66b' style='width: 10%; height:35px'>
<input id='edit_task_date' name='edit_task_date' value='".($row['service_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>

</th>
<th bgcolor='#61c66b' style='width: 10%; height:35px'>
<input id='user_name' name='user_name' value='".($row['user_name'])."' type='text' style='text-align:center; width:100%; height:100%; border:0' disabled='disabled'/>

</th>
</tr>";
					
				}
		}
		}
		
	}else{
		echo "<tr><th colspan='6' align='center' style='color:#F00'>Please add a service first</th></tr>";
	}
?>


<!-- line 2!-->
</table>
</center>
</div>
