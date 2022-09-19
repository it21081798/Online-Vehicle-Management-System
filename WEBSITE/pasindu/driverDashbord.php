<?php
require 'driverConfigLogin.php';
//session_start();
if(!isset($_SESSION['id'])){
	header("Location: driverLogin.php");  
}

require 'driverConfigDashbord.php';
?>
        
<!DOCTYPE html>
<html>
    <head>
        <title>Online Vehicle Reservation</title>
	    <link rel="stylesheet" type="text/css" href="styles/headerFooter.css">

        <style>

         
            .title{
                position: absolute;
                text-align: center;
                color: black;
                font-family:Arial, Helvetica, sans-serif;
                font-weight: bold;
                top: 30%;
                left: 40%;
            }

            .driver-details{

                background-color: rgba(255, 255, 255, 0.541);
                position: absolute;
                margin-left: 10%;
                border-radius: 15px;
                top: 45%;
                margin-bottom: 10%;
                padding-right: 40%;
                
            }

            .edit-profile{
                position: relative;
                font-size: 20px;
                text-align: center;
                background-color: rgb(86, 249, 255);
                border-style: none;
                border-radius: 10px; 
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
                padding-right: 10px;
                font-weight: bolder;
                top: -100px;
                left: 50%;
                transition-duration: 0.3s;
              
            }

            .edit-profile:hover{
                background-color: tomato;
            }

            h3.hi{
                position: relative;
                color: rgb(0, 0, 0);
                margin-left: -25%;
                margin-top: -10%;

            }

            .change-pwd{
                position: relative;
                text-decoration: none;
                font-size: 20px;
                font-weight: bolder;
                top: -50px;
                left: 10%;
                color: rgb(0, 26, 255);
                transition-duration: 0.3s;
            }

            .change-pwd:hover{
                color: blue;
            }

            .d-info{
                position: relative;
                left: -10%;
            }

            .lbl{
                position: relative;
                right: -20%;
                font-size: 15px;
                margin-left: 0%;
                bottom: 5%;
                font-weight: bold;
                background-color: white;
                padding: 10px;
                border-radius: 10px;
                margin-bottom: 5px;
                font-family: sans-serif;
                background-color: rgba(255, 255, 255, 0.377);
                
            }

            .DP{
                position: relative;
                margin-top: 30px;
                margin-bottom: 20px;
            }

        </style>
    </head>

    <body>
        <div class="header">
		    <ul class="menu" >
                <li class="menu" name="logout" > <a href="logout.php">Log out</a> </li>
            
            </ul>
            
            <img class="logo" src="images/logo.png" alt="logo">
            <h2 class="CC">Ceylon Cabs</h2>
            <h3 class="RYC">- Rent your car - </h3>
    
            <input type="text" name="searchHome" placeholder="Search here" class="search-box" >
    
            <a href="../aboutus/AboutUS.php">     <button type="menu" class="menu1">About Us</button></a>
            <a href="../news/news.php">    <button type="menu" class="menu1">News</button></a>
            <a href="../career/careerh.php">    <button type="menu" class="menu1">Career</button></a>
            <a href="../package/package.php">    <button type="menu" class="menu1">Packages</button></a>
            <a href="../ride/Ride.php">    <button type="menu" class="menu1">Ride</button></a>
            <a href="../home/home.php">    <button type="menu" class="menu1">Home</button></a>
        </div>

        <img src="images/benz.jpg" alt="benz" width="100%">


        <div class="driver-profile-all">
            <h1 class="title">Driver's Dashboard</h1>

            <div class="driver-details">
                <img src="images/DP/blueDP.png" alt="Profile Picture" class="DP">
                
                <a href ="updateDriverDetails.php"> <button type="button" class="edit-profile">Edit Profile</button> </a>

                <?php
                $ID = $_SESSION["id"];
                $sql = "select * from driver where id=$ID ";
                $res = $conn->query($sql);
                if ($res->num_rows>0){
                    
                    while ($row = $res->fetch_assoc()){
                        echo "<div class='data'>";

                        echo "<label class='lbl'> Personal Details </label> <br><br><br>";
                        echo "<label class='lbl'> First Name :- ".$row["fname"]." </label> <br><br><br>";
                        echo "<label class='lbl'> Last Name :- ".$row["lname"]." </label> <br><br><br>";
                        echo "<label class='lbl'> Mobile :- ".$row["mobile"]." </label> <br><br><br>";
                        echo "<label class='lbl'> Address :- ".$row["address"]." </label> <br><br><br>";
                        echo "<label class='lbl'> Date of Birth :- ".$row["DOB"]." </label> <br><br><br>";
                        echo "<label class='lbl'> License No :- ".$row["license"]." </label> <br><br><br>";
                        echo "<label class='lbl'> E-Mail :- ".$row["email"]." </label> <br><br><br>";

                        echo "<label class='lbl'> Bank Details </label> <br><br><br>";
                        echo "<label class='lbl'> Branch Name :- ".$row["branch_name"]." </label> <br><br><br>";
                        echo "<label class='lbl'> Account No. :- ".$row["account_no"]." </label> <br><br><br>";
                        echo "<label class='lbl'> Branch No. :- ".$row["branch_no"]." </label> <br><br><br>";
                    }
                }
                else{
                    echo "Not Found";
                }
                ?>

            </div>
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