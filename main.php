<?php
session_start();
if(!isset($_SESSION['userid'])){
    header('location:../index.php');
}
?>
<html>

<title>Home</title
<body>
<?php
include_once('../pages/pageheader.php');
?>
<div>
    <div id="left">
        <img src="../dogs/schools.jpg">

    </div>
    <pre>
		<p>Lusy Pet service is one of the growing petsitting company which have been providing an excellent service to its
		customers. Your pets here in Lucy's Pet get good care and proper dietery supliment.We have been providing the following features to our customers.
		1)Taking your pets out for walk.
		2) Feeding your pets.
		3)Playing with your pets.
		4)Socializing your pets.</p><pre>
	<div id="right">

	<div>

	</div>
</body>
