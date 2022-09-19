<?php 
    session_start(); 
    
    if(!isset($_SESSION['id'])){
        header("Location: ../userprofile/userLogin.php");  
    }
    else{
        $id=$_SESSION['id'];
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/ride.js"></script>
<style>
div.a {
	line-height:200%;
	text-align: center;

}


body{
	background-image: url('images/lambra.png')
}	
</style>

	<title>Online Vehicle Reservation</title>
    
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="css/ride.css">
	
	
</head>
<body>

	
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

        <a href="../aboutus/AboutUS.php"><button type="submit" class="menu1">About Us</button></a>
        <a href="../news/news.php">	<button type="submit" class="menu1">News</button></a>
        <a href="../career/careerh.php">	<button type="submit" class="menu1">Career</button></a>
        <a href="../package/package.php">	<button type="submit" class="menu1">Packages</button></a>
        <a href="../ride/Ride.php">   <button type="submit" class="menu1">Ride</button></a>
        <a href="../home/home.php">   <button type="submit" class="menu1">Home</button></a>
     
</div>
    
    <h2 class="triphead">Plan your trip</h2>
<div class="box">
<div>
    <form class="form-inline" method="post" action="submitRideDetails.php" >
        
        <label class="label" for="pick">Pickup Location:</label><br>
        <input type="text" class="textbox" id="pick" name="pick" ><br>
        <label class="label" for="drop">Drop Location:</label><br>
        <input type="text" class="textbox" id="drop" name="drop" ><br><br>
        <label class="label5" for="duration">Duration (days):</label><br>
        <input type="text" class="textbox" id="duration" name="duration" ><br>
        
  
      <br><br><br>

    
            <label class="label3" for="date">Pickup Date:</label>
            <input class="textbox" type="date" id="date" name="date">
            <label class="label2" for="time">Select a time:</label>
            <input class="textbox2" type="time" id="appt" name="time"><br><br><br><br>
            
            <?php              
                echo"<input type='hidden' class='textbox6' id='user' value='$id' name='user' ><br>";
            ?>
            

            <label class="label4" for="cars">Choose a Vehicle:</label>
            <select onchange="loadDetails(this.value)" class="select" id="cars" name="cars">
              <option name="ops"  value="ops">Selcet Vehicle </option> 
              <option name="op1"  value="Range-Rover Autobiography">Range-Rover Autobiography</option>
              <option name="op2"  value="Land-Rover Defender">Land-Rover Defender</option>
              <option name="op3"  value="Toyota Prius">Toyota Prius</option>
              <option name="op4"  value="Suzuki alto">Suzuki alto</option>
              <option name="op5"  value="Honda civic">Honda civic</option>
              <option name="op6"  value="Suzuki Wagon R">Suzuki Wagon R</option>
              <option name="op7"  value="BMW 520d">BMW 520d</option>
              <option name="op8"  value="Toyota Premio">Toyota Premio</option>
              <option name="op9"  value="Land-Crusier Prado">Land-Crusier Prado</option>
              <option name="op11"  value="Scania bus">Scania bus</option>
              <option name="op10"  value="Toyota Hilux">Toyota Hilux</option>
              <option name="op12"  value="Toyota KDH">Toyota KDH</option>
            </select>
           
               <button type="submit" class="submit"> Place a booking</button>
        </form>
        </div>
    

<div class="pic">
    <center> <img id="carImg" class="img" src="images/carlot.jpg"  width="400" height="auto" > </center> <br> <br>
</div>
<div class="box2">
    <strong  id="para">Ceylon Cabs is the most famous online vehicle reservation system in Sri Lanka. This system allows customers to reserve vehicles via this platform. This allows customers to reserve vehicles via internet.
        The basic functions of an online vehicle reservation system is to keep tracks of vehicles, customers and also booking. It supplies useful details to the administrator of the system such as giving daily reports of vehicles to be picked. And also sometimes it becomes as a vehicle management system by managing the use and prices of the vehicle.</strong>

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


    



    
		

    



  