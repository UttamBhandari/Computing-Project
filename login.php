<?php

session_start();
//print_r($_SESSION);

if(isset($_SESSION['username']))
{
    die(header('location: index.php'));
}

?>





<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/login_styles.css">
    <title>Cars and Cabs Reservation System</title>
<body >
<div class="header">
    <p style="margin-left: 450px">Welcome to online booking system of Cars and Cabs</p>
    <p style="margin-left: 550px">Book for your Journey</p>
    <form action="checklogin.php" method="POST">
        <p id="align"><input type="text" name="user_name" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="Login" value="Login"></p>



    </form>

</div>


<div>
    <div class="join" style="margin: 20px 25px 25px 25px">
        <div class="first" style="width: 50%; height: 70%; margin-right: 50px ">
            <div id="container" style="max-width:100%">
                <img class="mySlides" src="./images/a.jpg" style="width:100%; height:100%;">
                <img class="mySlides" src="./images/d.jpg" style="width:100%; height:100%;">
                <img class="mySlides" src="./images/e.jpg" style="width:100%; height:100%;">
                <img class="mySlides" src="./images/f.jpg" style="width:100%; height:100%;">
                <img class="mySlides" src="./images/g.jpg" style="width:100%; height:100%;">
                <img class="mySlides" src="./images/h.jpg" style="width:100%; height:100%;">
            </div>

            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}
                    x[myIndex-1].style.display = "block";
                    setTimeout(carousel, 2500); // Change image every 2 seconds
                }
            </script>
        </div>
    </div>

    <div class="second" style="width:40%; height: 80%">
        <h1>Register new Account</h1>
        <form method="Post" action="registeruser.php" style="font-size: 5px;">
				<pre>
			  <p>Enter your First Name        <input type="text" name="fname"></p>
			  <p>Enter your Last Name         <input type="text" name="lname" required></p>
			  <p>Enter your Address           <input type="text" name="address" required></p>
			  <p>Enter your Contact Number    <input type="text" name="contact" required></p>
			  <p>Enter your Username          <input type="text" name="user" required></p>
			  <p>Enter your password          <input type="password" name="pass" required></p>
			 <input type="submit" name="register" value="Register">
			</pre>
        </form></div>
</div>

</div>

</body>
</html>