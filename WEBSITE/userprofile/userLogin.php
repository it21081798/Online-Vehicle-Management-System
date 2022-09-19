<?php
include("userConfig.php"); // Include loginserv for checking username and password
?>


<!DOCTYPE html>
<html>
<head>
	
	<title>Online Vehicle Reservation</title>
	<link rel="stylesheet" type="text/css" href="styles/headerFooter.css">
	
<style>

/* STYLE FOR BODY CONTENT */

.log-as-user{
	color: rgb(255, 0, 0);
	font-family: Arial, Helvetica, sans-serif;
	text-align:center;
	font-size: 31px;
	margin-top: 0px;
	padding-top: 40px;
	margin-bottom: 30px;
}

.input{
	position: absolute;
	background-color: rgba(218, 218, 218, 0.5);
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


.log{
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

.log-btn{
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

.log-btn:hover{
	
	background-color: crimson;
	font-size: 19.5px;
}

p.SignUp{
	font-size: 17px;
	font-family: 'Times New Roman', Times, serif;
}

.click{
	transition-duration: 0.3s;
}


.click:hover{
	color: crimson;
	
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

		<a href="../aboutus/AboutUS.php">	<button type="menu" class="menu1">About Us</button></a>
		<a href="../news/news.php"><button type="menu" class="menu1">News</button></a>
		<a href="../career/careerh.php"><button type="menu" class="menu1">Career</button></a>
		<a href="../package/package.php"><button type="menu" class="menu1">Packages</button></a>
		<a href="../ride/Ride.php"><button type="menu" class="menu1">Ride</button></a>
		<a href="../home/home.php"><button type="menu" class="menu1">Home</button></a>
		
		
	</div>

<div>
<img class="back" src="images/back.jpg" alt="background" width="100%">

	<div class="input">
		
		<h4 class="log-as-user">Login as a User</h4>

		<form method="POST" >
			Username<br>
			<input type="text" class="log" name="UserName"  placeholder="Enter Username" required> <br> <br>

			Password<br>
			<input type="password" class="log" name="Paswd" placeholder="Enter Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}"> <br> <br> <br> 
		

		<input type="submit" class="log-btn"  value="login" name="sub"><br> <br>

		
		<p class="SignUp">Don't Have an Account ? <a class="click" href="../userreg/sign.php">Click Here</a> to Sign Up</p>

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

