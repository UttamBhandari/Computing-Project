<?php
//die();
//if(isset($_POST['book_service']))
{
	
	//$origin = $_POST['origin']; //kathmandu
	$origin = $_POST['origin'];
	$dest =  $_POST['destination']; // pokhara
	$a =0;
 //request the directions
$routes=json_decode(file_get_contents("http://maps.googleapis.com/maps/api/directions/json?origin=$origin&destination=$dest&alternatives=true&sensor=false"))->routes;

  //sort the routes based on the distance
usort($routes,create_function('$a,$b','return intval($a->legs[0]->distance->value) - intval($b->legs[0]->distance->value);'));

 //print the shortest distance
 if(!$routes)
 {	
 	die(header('location: ../index.php?errorloc=user'));
 }else{
	 $a = $routes[0]->legs[0]->distance->value/1000;
 }
//$a = $routes[0]->legs[0]->distance->value;//returns 9.0 km
//print_r($routes);
//$a = $actual_distance_km = $routes[0]->legs[0]->distance->value;
//echo $a;
//insert ,,....... ('$actual_distance')

}
?>