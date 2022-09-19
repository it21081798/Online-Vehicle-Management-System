<?php

session_start();

require  'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Online Vehicle Reservation</title>
	<link rel="stylesheet" type="text/css" href="styles/header-footer.css">
	<style>
		
.subhead {

	color: black;
	text-align: center;
	font-size: 55px;
	padding: 0px;
	margin-bottom: 0%;
	margin-top: 0%;
	margin-left: 0%;
	margin-right: 0%;
	text-shadow: 2px 2px gray;
}

.mtr {
	margin-top: 10%;
	margin-left: 20%;
	font-size: 20px;
}

.mtr1 {
	font-size: 20px;
	font-family: Arial, Helvetica, sans-serif;
	color: black;
	margin-top: 35px;
	margin-left: 40px;
	text-align: center;
}


.p1 {
	font-size: 16px;
	font-weight: normal;
	font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
	color: black;
	margin-top: -10%;
	margin-left: 70%;
}

.bt1 {

	background-color: rgba(165, 42, 42, 0.411);
	border: none;
	color: black;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	display: inline-block;
	font-size: 17px;
	transition-duration: 0.4s;
	padding: 10px;
	font-weight: bold;
	border-radius: 15px;
	margin-right: 15px;
	margin-bottom: 10px;
	margin-left:39%;
	margin-top:8%;
}

.bt1:hover {
	background-color: brown;
}


.container {
	padding-left: 2%;
}

.column {
	float:left;
	width: 35%;
	margin-bottom:0%;
	padding:0 8px;			/*top and bottom padding are 0 , right and left padding are 8px */
	padding-top:2%;       
	margin-left: 10%;

}

.card {
	box-shadow: 0 5px 5px 0 black;
	border-radius: 5%;
	background-color:white;
	margin-top:10%;
	position:relative;


}
	.container::after,    /* W3School */
	.row::after {
	content: "";
	clear: both;
	display: table;

}
.label1{
	padding-left:20%;
	font-size:18px;
}
.content{
	padding-left:35%;
	margin-top:-6.7%;
	font-size:18px;
}
.page1{
	margin-top:-155%;
}
div.footer{
	background-color: rgb(49, 136, 148);
	position: relative;
	margin-top:5%;
	
}

	</style>
	
</head>
<body>
	
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
		<h2 >Ceylon Cabs</h2>
		<h3 >- Rent your car - </h3>

		<input type="text" name="searchHome" placeholder="Search here" class="search-box" >

		

		<a href="../aboutus/AboutUS.php">	<button type="menu" class="menu1">About Us</button></a>

        <a href="../news/news.php">    <button type="menu" class="menu1">News</button></a>

        <a href="../career/careerh.php">    <button type="menu" class="menu1">Career</button></a>

        <a href="../package/package.php">    <button type="menu" class="menu1">Packages</button></a>

		<a href="../ride/Ride.php">   <button type="menu" class="menu1">Ride</button></a>

		<a href="../home/home.php">   <button type="menu" class="menu1">Home</button></a>
		
	</div>

	
	<img src="images/img1.png" width="100%"  >
	<div class="page1">
	<h2 class="subhead">Packages</h2>
	<br>
	

	<?php

		//get record from package table where package id=12

		$sql = "SELECT * FROM package where id=12";
		$result = $con->query($sql);
		if($result->num_rows>0)
		{
			
			if($row = $result->fetch_assoc())
			{
		echo"<div class='row'>";
		echo"<div class='column'>";
		echo"<div class='card'>";
		echo"<img class='mtr' src='images/matara.jpg' alt='kandy'width='350px' height='200px' >";	
		echo"	<div class = 'container'>";
		echo"	<h2 class='mtr1'> ".$row["package_name"]."</h2><br>";				
		echo"	<label class='label1'>Duration  </label><br><br>";
		echo"	<p class='content'>".$row["duration"]."</p>";
		echo"	<label class='label1'>Distance </label><br><br>";
		echo"	<p class='content'>".$row["distance"]."</p>";			
		echo"	<p class ='p1'>".$row["price"]."</p>	<br><br>";			
		echo"<ul>";
		echo"	<li>".$row["details"]."</li>";
		echo"</ul>";					
			echo"	<button type='submit' class='bt1'><a href='../Payment/paymenth.html'>Book Now</a></button>";
		echo"	</div>";
		echo"</div>";
		echo"</div>";
		}
		}
		
		else
		{
			echo "No results";
		}

		//get record from package table where package id=13

		$sql = "SELECT * FROM package where id=13";
		$result = $con->query($sql);
		if($result->num_rows>0)
		{
			
			if($row = $result->fetch_assoc())
			{
		echo"<div class='row'>";
		echo"<div class='column'>";
		echo"<div class='card'>";
		echo"<img class='mtr' src='images/kandy.jpg' alt='kandy'width='350px' height='200px' >";	
		echo"	<div class = 'container'>";
		echo"	<h2 class='mtr1'> ".$row["package_name"]."</h2><br>";			
		echo"	<label class='label1'>Duration  </label><br><br>";
		echo"	<p class='content'>".$row["duration"]."</p>";
		echo"	<label class='label1'>Distance </label><br><br>";
		echo"	<p class='content'>".$row["distance"]."</p>";			
		echo"	<p class ='p1'>".$row["price"]."</p>	<br><br>"; 			
		echo"   <ul>";
		echo"		<li>".$row["details"]."</li>";
		echo"	</ul>";				
		echo"<button type='submit' class='bt1'><a href='../Payment/paymenth.html'>Book Now</a></button>";
		echo"</div>";
		echo"</div>";
		echo"</div>";
		}
		}
		else
		{
		echo "No results";
		}
		

		//get record from package table where package id=14

		$sql = "SELECT * FROM package where id=14";
		$result = $con->query($sql);
		if($result->num_rows>0)
		{
			
			if($row = $result->fetch_assoc())
			{
		echo"		<div class='row'>";
		echo"		<div class='column'>";
		echo"		<div class='card'>";
		echo"       <img class='mtr' src='images/jaffna.jfif' alt='kandy'width='350px' height='200px' >";	
		echo"			<div class = 'container'>";
		echo"			<h2 class='mtr1'> ".$row["package_name"]."</h2><br>";
					
		echo"			<label class='label1'>Duration  </label><br><br>";
		echo"			<p class='content'>".$row["duration"]."</p>";
		echo"			<label class='label1'>Distance </label><br><br>";
		echo"			<p class='content'>".$row["distance"]."</p>";			
		echo"			<p class ='p1'>".$row["price"]."</p>	<br><br>";
						
					
		echo"			<ul >";
		echo"				<li>".$row["details"]."</li>";
		
		echo"			</ul>";			
			
			echo"	<button type='submit' class='bt1'><a href='../Payment/paymenth.html'>Book Now</a></button>";
		echo"	</div>";
		echo"</div>";
		echo"</div>";
		}
		}
		
		else
		{
			echo "No results";
		}

		//get record from package table where package id=15

		$sql = "SELECT * FROM package where id=15";
		$result = $con->query($sql);
		if($result->num_rows>0)
		{
			
			if($row = $result->fetch_assoc())
			{
		echo"		<div class='row'>";
		echo"		<div class='column'>";
		echo"		<div class='card'>";
		echo"       <img class='mtr' src='images/nuwara.jpg' alt='kandy'width='350px' height='200px' >";	
		echo"			<div class = 'container'>";
		echo"			<h2 class='mtr1'> ".$row["package_name"]."</h2><br>";
					
		echo"			<label class='label1'>Duration  </label><br><br>";
		echo"			<p class='content'>".$row["duration"]."</p>";
		echo"			<label class='label1'>Distance </label><br><br>";
		echo"			<p class='content'>".$row["distance"]."</p>";			
		echo"			<p class ='p1'>".$row["price"]."</p>	<br><br>";
						
					
		echo"			<ul >";
		echo"				<li>".$row["details"]."</li>";
		
		echo"			</ul>";			
			
			echo"	<button type='submit' class='bt1'><a href='../Payment/paymenth.html'>Book Now</a></button>";
		echo"	</div>";
		echo"</div>";
		echo"</div>";
		}
		}
		
		else
		{
			echo "No results";
		}

		//get record from package table where package id=16

		$sql = "SELECT * FROM package where id=16";
		$result = $con->query($sql);
		if($result->num_rows>0)
		{
			
			if($row = $result->fetch_assoc())
			{
		echo"		<div class='row'>";
		echo"		<div class='column'>";
		echo"		<div class='card'>";
		echo"       <img class='mtr' src='images/deniyaya.jfif' alt='kandy'width='350px' height='200px' >";	
		echo"			<div class = 'container'>";
		echo"			<h2 class='mtr1'> ".$row["package_name"]."</h2><br>";
					
		echo"			<label class='label1'>Duration  </label><br><br>";
		echo"			<p class='content'>".$row["duration"]."</p>";
		echo"			<label class='label1'>Distance </label><br><br>";
		echo"			<p class='content'>".$row["distance"]."</p>";			
		echo"			<p class ='p1'>".$row["price"]."</p>	<br><br>";
						
					
		echo"			<ul >";
		echo"				<li>".$row["details"]."</li>";
		
		echo"			</ul>";			
			
			echo"	<button type='submit' class='bt1'><a href='../Payment/paymenth.html'>Book Now</a></button>";
		echo"	</div>";
		echo"</div>";
		echo"</div>";
		}
		}
		
		else
		{
			echo "No results";
		}
        

		//get record from package table where package id=17

		$sql = "SELECT * FROM package where id=17";
		$result = $con->query($sql);
		if($result->num_rows>0)
		{
			
			if($row = $result->fetch_assoc())
			{
		echo"		<div class='row'>";
		echo"		<div class='column'>";
		echo"		<div class='card'>";
		echo"       <img class='mtr' src='images/trinco.jpg' alt='kandy' width='350px' height='200px' >";	
		echo"			<div class = 'container'>";
		echo"			<h2 class='mtr1'> ".$row["package_name"]."</h2><br>";
					
		echo"			<label class='label1'>Duration  </label><br><br>";
		echo"			<p class='content'>".$row["duration"]."</p>";
		echo"			<label class='label1'>Distance </label><br><br>";
		echo"			<p class='content'>".$row["distance"]."</p>";			
		echo"			<p class ='p1'>".$row["price"]."</p>	<br><br>";
						
					
		echo"			<ul >";
		echo"				<li>".$row["details"]."</li>";
		
		echo"			</ul>";			
			
			echo"	<button type='submit' class='bt1'><a href='../Payment/paymenth.html'>Book Now</a></button>";
		echo"	</div>";
		echo"</div>";
		echo"</div>";
		}
		}
		
		else
		{
			echo "No results";
		}
		?>
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
</body>
</html>

