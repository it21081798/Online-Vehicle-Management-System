<?php
include("driverConfigLogin.php"); // Include loginserv for checking username and password
?>


<!DOCTYPE html>
<html>
<head>
	
	<title>Online Vehicle Reservation</title>
	<link rel="stylesheet" type="text/css" href="styles/headerFooter.css">
	<script src="js/myScript.js"></script>
<style>

/* STYLE FOR BODY CONTENT */

h4{
	color: rgb(255, 0, 0);
	font-family: Arial, Helvetica, sans-serif;
	text-align:center;
	font-size: 32px;
	margin-bottom: 30px;
	margin-top: 0px;
	padding-top: 40px;
}

.input-details{
	position: absolute;
	background-color: rgba(218, 218, 218, 0.521);
	text-align: center;
	font-weight:normal;
	font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
	font-size: 18px;
	margin-left: 35%;
	margin-right: 35%;
	border-radius: 20px;
	margin-top: 2%;
	margin-bottom: 20px;
	padding-bottom: 35px;
	padding-left: 3%;
	padding-right:3%;
	top: 35%;
	
}


.d-log{
	border-style:solid;
	border-color: rgba(192, 192, 192, 0.514);
	font-size: 16px;
	font-style:normal;
	font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	border-radius: 10px;
	text-align: center;
	padding: 7px;
	margin-top: 10px;
	width: 250px;
}

.loginbtn{
	width: 90px;
	height: 38px;
	background-color: rgb(5, 18, 92);
	color: blanchedalmond;
	font-size: 18px;
	font-weight: bold;
	border-radius: 10px;
	margin-left: 0%;
	border-style: none;
	transition-duration: 0.3s;
}

.loginbtn:hover{
	
	background-color: crimson;
	font-size: 19.5px;
}

.frogetdpw{
	font-size: 17px;
	font-family: 'Times New Roman', Times, serif;
	transition-duration: 0.3s;
	text-align: center;
}

.frogetdpw:hover{
	color: rgb(220, 20, 20);
	font-size: 18px;
	
}

p.signup1{
	font-size: 17px;
	font-family: 'Times New Roman', Times, serif;
}

.click-here{
	transition-duration: 0.3s;
}


.click-here:hover{
	color: crimson;
	
}

.para-pwd{
	font-size: 15px;
}


</style>	
	
</head>
<body>
	
	<div class="header">
		

		<ul class="menu">
			<li class="menu"> <a href="../login_selection/loginSelection.php">Login</a> </li>
			<li class="menu"> <a href="../reg_selection/regSelection.php">Sign Up</a> </li>
		</ul>
		
		<img class="logo" src="images/logo.png" alt="logo">
		<h2 class="CC">Ceylon Cabs</h2>
		<h3 class="RYC">- Rent your car - </h3>

		<input type="text" name="searchHome" placeholder="Search here" class="search-box" >

		<a href="../aboutus/AboutUS.php"><button type="menu" class="menu1">About Us</button></a>
		<a href="../news/news.php"><button type="menu" class="menu1">News</button></a>
		<a href="../career/careerh.php"><button type="menu" class="menu1">Career</button></a>
		<a href="../package/package.php"><button type="menu" class="menu1">Packages</button></a>
		<a href="../ride/Ride.php"><button type="menu" class="menu1">Ride</button></a>
		<a href="../home/home.php"><button type="menu" class="menu1">Home</button></a>
		
		
	</div>

<div>
<img class="back" src="images/back.jpg" alt="background" width="100%">
	<div class="input-details">
		
		<h4>Login as a Driver</h4>
		<form method="POST" >
			Driver ID<br>
			<input type="text" class="d-log" name="user" required placeholder="Enter Driver ID Here"> <br> <br>

			Password<br>
			<input type="password" class="d-log" name="pass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" placeholder="Enter Password Here"> <br> <br> 
			

		<input type="checkbox" class="chkbox" id="keepLogIn"> Keep me logged in<br> <br> <br> 

		<input type="submit" class="loginbtn" id="subLog" value="Log In" name="submit"><br> <br>  

		<a class="frogetdpw" href="#">Froget Password ? </a>

		<p class="signup1">Don't Have an Account ? <a class="click-here" href="../driverreg/driverreg.php">Click Here</a> to Sign Up</p>

	    </form>
	</div>


	<div class="footer">
	
		<a href="../terms/termsAndConditions.html" class="l1">Terms and Conditions&nbsp;&nbsp;&nbsp;</a>  <a href="../faq/FAQ.php" class="l1">FAQ</a> </li> 
		<img class="fb" src="images/fbLogo.png" alt="Facebook" width="25px"> 
		<img class="twitter" src="images/twitter.png" alt="Twitter" width="25px"> 
		<img class="insta" src="images/Instagram.png" alt="Instagram" width="25px">
		<img class="linkedin" src="images/LinkedIn.png" alt="LinkedIn" width="25px"> <br> <br>
	
		<a href="../privacy/privacyPolices.html" class="l1">Privacy Policies&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li> 
		<a href="../contactus/contct.php" class="l1">Contact Us</a> </li> 
		<img class="email" src="images/email.png" alt="Email" width="30px"> &nbsp; info@Ceyloncabs.lk  <br> <br>
	
		&nbsp;&nbsp;&nbsp;&copy; Ceyloncabs Tech Inc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Colombo 
		<img class="phone" src="images/phone.png" alt="Phone" width="20px"> &nbsp;	+9441 0000001 / +9441 0000002
				
	</div>
</div>


</body>
</html>

