<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Online Vehicle Reservation</title>
	<link rel="stylesheet" type="text/css" href="css/slideshow.css">
	<link rel="stylesheet" type="text/css" href="css/blurback.css">
	<link rel="stylesheet" type="text/css" href="styles/headerFooter.css">
<style>
	body{
	background-image: url('images/aboutcar.png')
}	
</style>
</head>
<body>

<!------------------------------------------------>

	

<div class="bg-text">
  <h1 style="font-size:50px">ABOUT</h1>
  <h1 style="font-size:50px">US</h1>
  <p> Ceylon Cabs is the most famous online vehicle reservation system in Sri Lanka. This system allows customers to reserve vehicles via this platform. This allows customers to reserve vehicles via internet.
The basic functions of an online vehicle reservation system is to keep tracks of vehicles, customers and also booking. It supplies useful details to the administrator of the system such as giving daily reports of vehicles to be picked. And also sometimes it becomes as a vehicle management system by managing the use and prices of the vehicle.
Nowadays peoples travel from one place to another for many reasons because of their jobs, businesses, and vacations. As a result of that they are directed to prefer other options such as rent a cab. Keeping in this mind our team has decided to make an online vehicle reservation system to book cabs, this system is not only for travel. This system helps for customers to choose different kinds of cabs available. Customers can book the cab according to their requirement and budget.
</p>
  
</div>
	
<!------------------------------------------------------------>

	<div class="header">
	<ul class="menu">	
	<?php
            if(isset($_SESSION['id'])){
             echo"   <li class='menu'> <a href='../userprofile/logout.php'>Logout</a> </li>";
                
            }
            else{
                echo" 	<li class='menu'> <a href='../login_selection/loginSelection.php'>Login</a> </li>";
                echo" 	<li class='menu'> <a href='../reg_selection/regSelection.php'>Sign Up</a> </li>";
            }
            ?>
			</ul>
		
		<img class="logo" src="images/logo.png" alt="logo">
		<h2 class="CC">Ceylon Cabs</h2>
		<h3 class="RYC">- Rent your car - </h3>

		<input type="text" name="searchHome" placeholder="Search here" class="search-box" >

		<a href="../aboutus/AboutUS.php">	<button type="submit" class="menu1">About Us</button></a>
		<a href="../news/news.php"><button type="submit" class="menu1">News</button></a>
		<a href="../career/careerh.php"><button type="submit" class="menu1">Career</button></a>
		<a href="../package/package.php">	<button type="submit" class="menu1">Packages</button></a>
		<a href="../ride/Ride.php">	<button type="submit" class="menu1">Ride</button></a>
		<a href="../home/home.php">	<button type="submit" class="menu1">Home</button></a>
		<!--<img class="background" src="images/back.jpg" alt="background" width="1080" > -->
		
	</div>

	
	
	
	
	<!--<div class="a">
		<h1 style="font-size:500% ">ABOUT</h1>
		<h1 style="font-size:500%;">US</h1>
		
		
		</div>-->
	
	<!--------------------------------------------------------------------------->
	<div class="slideshow-container">

	<div class="mySlides fade">
	  <div class="numbertext">1 / 3</div>
	  <img src="images/defender.jpg" style="width:100%">
	  <div class="text">Land Rover Defender</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">2 / 3</div>
	  <img src="images/rover.jpg" style="width:100%">
	  <div class="text">Range Rover Autobiography</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">3 / 3</div>
	  <img src="images/bmw520d.jpg" style="width:100%">
	  <div class="text">BMW 520d</div>
	</div>

	</div>
	

	<div class="dott" style="text-align:center" >
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	</div>
	
	<script src="js/slideshow.js"></script>
	

	
	<!------------------------------------------------------------------------------------>
	
		<!--<div class="card"></div>-->
		

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
	

	






	
	
	
		









</body>
</html>

