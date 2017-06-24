<html>
			<head>
			<link rel="stylesheet" type="text/css" href="css/stylesheetlogin.css">
			<title>Cars and Cabs Reservation System</title>
			<body >

			<div class="header">
			<p style="margin-left: 450px">Welcome to online booking system of Cars and Cabs</p>
				<p style="margin-left: 550px">Book for your Journey</p>
            <form action="check/checklogin.php" method="Post">
			<p id="align"><input type="text" name="user" placeholder="Username">
				<input type="password" name="pass" placeholder="Password">
				<input type="submit" name="Login" value="Login"></p>
			</form>

			</div>


			<div>
				<div class="join">
			<div class="first" style="width: 60%; height: 80%; ">
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
			<form method="Post" action="check/registeruser.php" style="font-size: 5px;">
				<pre>
			  <p>Enter your First Name        <input type="text" name="fname"></p>
			  <p>Enter your Last Name         <input type="text" name="lname" required></p>
			  <p>Enter your Address           <input type="text" name="address" required></p>
			  <p>Enter your Contact Number    <input type="text" name="contact" required></p>
			  <p>Enter your Username          <input type="text" name="username" required></p>
			  <p>Enter your password          <input type="password" name="password" required></p>
			 <input type="submit" name="Register" value="Register">
			</pre>
			</form></div>
			</div>

			</div>

			</body>
			</html>