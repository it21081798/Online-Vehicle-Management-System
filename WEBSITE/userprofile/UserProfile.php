<?php
require 'config.php';
session_start();
if(!isset($_SESSION['id'])){
	header("Location: userLogin.php");  
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div.a {
	line-height:200%;
	text-align: center;

}


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    height: 100vh;
    width: 100%;
}

h1{
    font-family: sans-serif;
    text-align: center;
    font-size: 30px;
    color: #222;
}

.profile-pic-div{
    height: 150px;
    width: 150px;
    position: absolute;
    top: 45%;
    left: 22%;
    transform: translate(-50%,-50%);
    border-radius: 50%;
    overflow: hidden;
    border: 1px solid grey;
}

#photo{
    height: 100%;
    width: 100%;
}

#file{
    display: none;
}

#uploadBtn{
    height: 40px;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    background: rgba(0, 0, 0, 0.7);
    color: wheat;
    line-height: 30px;
    font-family: sans-serif;
    font-size: 15px;
    cursor: pointer;
    display: none;
}

body{
	background-image: url('images/ridecar.png')
}


</style>

	<title>Online Vehicle Reservation</title>
	<link rel="stylesheet" type="text/css" href="styles/headerFooter.css">
	<link rel="stylesheet" type="text/css" href="styles/stylles.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
    <link rel="stylesheet"  href="css/propic.css">
	
</head>
<body>

	


	<div class="header">
		
		<ul class="menu">
			<li class="menu"> <a href="logout.php">Logout</a> </li>
			
		</ul>
		
		<img class="logo" src="images/logo.png" alt="logo">
		<h2 class="CC">Ceylon Cabs</h2>
		<h3 class="RYC">- Rent your car - </h3>

		<input type="text" name="searchHome" placeholder="Search here" class="search-box" >

		<a href="../aboutus/AboutUS.php">	<button type="submit" class="menu1">About Us</button></a>
		<a href="../news/news.php.php">	<button type="submit" class="menu1">News</button></a>
		<a href="../career/careerh.php"><button type="submit" class="menu1">Career</button></a>
		<a href="../package/package.php">	<button type="submit" class="menu1">Packages</button></a>
		<a href="../ride/Ride.php">	<button type="submit" class="menu1">Ride</button></a>
		<a href="../home/home.php">	<button type="submit" class="menu1">Home</button></a>
		
		
	</div>
    
    <div class="profileback">
  
    <div>
        <ul class="breadcrumb">
            <li><a href="updateprofile.php">Update Profile</a></li>
            
            
          </ul>
    </div>
</div>


<?php
			$ID = $_SESSION['id'];
				$sql="SELECT * FROM name WHERE id=$ID";
				$result = $conn->query($sql);
				if($result->num_rows>0)
				{
					while($row = $result->fetch_assoc())
					{
						echo "<div class='det'>";
	echo "	<label class='label' >First name: ".$row["fname"]."</label><br><br><br>";
	echo "	<label class='label' >Last name: ".$row["lname"]."</label><br><br><br>";
	echo "	<label class='label' >Gender: ".$row["gender"]."</label><br><br><br>";
	echo "	<label class='label' >DOB: ".$row["DOB"]."</label><br><br><br>";
	echo "	<label class='label' >Address: ".$row["address"]."</label><br><br><br>";
	echo "	<label class='label' >Email: ".$row["email"]."</label><br><br><br>";
	echo "</div>";
						}
					}

					else
				{
					echo "No results";
				}

				
		
			
			$sql="SELECT * FROM ride_details WHERE user_ID=$ID order by id desc limit 1 " ;
				$result = $conn->query($sql);
				if($result->num_rows>0)
				{
					while($row = $result->fetch_assoc())
					{
						echo "<div class='det2'>";
	
	echo "	<label class='label' for='pickl'>Pickup Location: ".$row["pickup_loc"]."</label><br><br><br>";
	echo "	<label class='label' for='dropl'>Drop Location: ".$row["drop_loc"]."</label><br><br><br>";
	echo "	<label class='label' for='pickd'>duration (days): ".$row["duration"]."</label><br><br><br>";
	echo "	<label class='label' for='pickt'>Pickup Date: ".$row["pickup_date"]."</label><br><br><br>";
	echo "	<label class='label' for='userID'>Vehicle: ".$row["vehicle"]."</label><br><br><br>";
	echo "</div>";
						}
					}

					else
				{
					echo "No results";
				}

				?>

				<h1 class="test">My Ride</h1>

				
				<div class="profile-pic-div">
  <img src="images/user2.png" id="photo">
  <input type="file" id="file">
  <label for="file" id="uploadBtn">Choose Photo</label>
</div>

<script src="js/app.js"></script>


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

				
				





