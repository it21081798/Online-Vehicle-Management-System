<?php
require 'config.php';
session_start();
if(!isset($_SESSION['id'])){
    header("Location: ../ride/Ride.php");  
}
else{
    $id=$_SESSION['id'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
<!-- Link the stylesheets -->
    <link rel="stylesheet" type="text/css"  href="paymentheaderfooter.css">
	<link rel="stylesheet" type="text/css"  href="paymnetc.css"> 

<style>
    div.footer{
        background-color: rgb(49, 136, 148);
        position:relative;
        margin-top: 10%;   
    }
</style>
</head>

<!-- Header Design -->
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
		
		<img class="logo" src="logo.png" alt="logo">
		<h2 class="CC">Ceylon Cabs</h2>
		<h3 class="RYC">- Rent your car - </h3>

		<input type="text" name="searchHome" placeholder="Search here" class="search-box" >

        <a href="../aboutus/AboutUS.php">	<button type="submit" class="menu1">About Us</button></a>
        <a href="../news/news.php">	<button type="submit" class="menu1">News</button></a>
        <a href="../career/careerh.php">	<button type="submit" class="menu1">Career</button></a>
        <a href="../package/package.php">	<button type="submit" class="menu1">Packages</button></a>
        <a href="../ride/Ride.php">	<button type="submit" class="menu1">Ride</button></a>
        <a href="../home/home.php">	<button type="submit" class="menu1">Home</button></a>
		<!--<img class="background" src="images/back.jpg" alt="background" width="1080" > -->	
	</div>
<!--Body--> 

	<body>
<div class="image">
<!-- Create form -->
<div class="form">
        <form method="POST" action="../slip/confirmation.php" class="contact-form">
<!--Topic -->
            <h1 class="topic">Complete Your Payment</h1>
            <label for="fname" class="f1">Payment method</lable><br>
<!-- radio buttons with card selection -->
<div class="ra">
            <input type="radio" id="master" name="payment"value="payment" >
            <img src= mc.png  alt="Master card" width="100" height="70">

            <input type="radio" id="visa" name="payment"value="payment" >
            <img src= vi.png  alt="Visa card" width="100" height="70">

            
</div>
            <label for="holdername" class="holder">Card Holder Name*</lable><br>
            <input type="text" name="name1" size="40" class="f2" required>
            <br><br>

            <label for="cardnumber" class="number">Card Number*</lable><br>
            <input type="text" name="cnumber" size="40" class="f2" required pattern="[0-9]{9}">
            <br><br>

            <label for="date" class="edate">Expire Date*</lable> <br>
            <input type="date" name="exdate" size="10" class="f" required>
            <br><br>

            <label for="cv1" class="cvv">cvv*</label><br>
            <input type="text" name="cv" size="10" class="f" required pattern="[0-9]{3}"> 
            
      <?php  
            $sql="SELECT * FROM ride_details WHERE user_ID=$id order by id desc limit 1 " ;
				$result = $conn->query($sql);
				if($result->num_rows>0)
				{
					while($row = $result->fetch_assoc())
					{
                        echo "    <label for='total' class='tot'>TOTAL: ".$row["price"]."</label>";
                        
                    }
					}

					else
				{
					echo "No results";
				}
                        ?>
            <br><br><br>
<!--confirm button -->
<a href="../slip/confirmation.php"><button type="submit" class="s">CONFIRM</button></a>


            </form>
</div>

<!-- Beginning of the footer -->
        <div class="footer">
	
            <a href="../terms/termsAndConditions.html" class="l1">Terms and Conditions&nbsp;&nbsp;&nbsp;</a>  <a href="../faq/FAQ.php" class="l1">FAQ</a> </li> 
            <img class="fb" src="fbLogo.png" alt="Facebook" width="25px"> 
            <img class="twitter" src="twitter.png" alt="Twitter" width="25px"> 
            <img class="insta" src="Instagram.png" alt="Instagram" width="25px">
            <img class="linkedin" src="LinkedIn.png" alt="LinkedIn" width="25px"> <br> <br>
        
            <a href="../privacy/privacyPolices.html" class="l1">Privacy Policies&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li> 
            <a href="../contactus/contct.php" class="l1">Contact Us</a> </li> 
            <img class="email" src="email.png" alt="Email" width="30px"> &nbsp; info@Ceyloncabs.lk  <br> <br>
        
            &nbsp;&nbsp;&nbsp;&copy; Ceyloncabs Tech Inc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Colombo 
            <img class="phone" src="phone.png" alt="Phone" width="20px"> &nbsp;	+9441 0000001 / +9441 0000002
                    
        </div>
            <html xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"><head>
        <!--[if gte mso 9]><xml>
        <mso:CustomDocumentProperties>
        <mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_SharedWithUsers msdt:dt="string">SLIIT Matara 2021 January Intake Members</mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_SharedWithUsers>
        <mso:SharedWithUsers msdt:dt="string">16;#SLIIT Matara 2021 January Intake Members</mso:SharedWithUsers>
        </mso:CustomDocumentProperties>
        </xml><![endif]-->
        </head>


        <div>
        </body>
        </html>




















