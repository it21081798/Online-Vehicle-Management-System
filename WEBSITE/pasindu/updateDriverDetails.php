<?php
require 'driverConfigUpdateDetails.php';
//session_start();
if(!isset($_SESSION['id'])){
	header("Location: driverLogin.php");  
}

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Online Vehicle Reservation</title>
	<link rel="stylesheet" type="text/css" href="styles/headerFooter.css">

    <style>
        .form{
            position: absolute;
            top: 30%;
            left: 10%;
            color: rgb(0, 0, 0);
            font-size: 15px;
            font-weight: bold;
            font-family: sans-serif;
            background-color: rgba(255, 255, 255, 0.534);
            border-radius: 10px;
            padding: 2%;
        }

        .edit-d-detail{
            margin-top: 2px;
            border-radius: 5px;
            border-style: none;
            padding: 1%;
            margin-right: 100%;
            width: 400px;
        }

        .save{
            position: relative;
            width: 90px;
            height: 40px;
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
            border-style: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            left: 40%;
            transition-duration: 0.3s;
        }

        .save:hover{
            background-color: crimson;
            color: white;
            
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
    
            <a href="../aboutus/AboutUS.php"> <button type="menu" class="menu1">About Us</button></a>
            <a href="../news/news.php">   <button type="menu" class="menu1">News</button></a>
            <a href="../career/careerh.php">   <button type="menu" class="menu1">Career</button></a>
            <a href="../package/package.php">   <button type="menu" class="menu1">Packages</button></a>
            <a href="../ride/Ride.php">   <button type="menu" class="menu1">Ride</button></a>
            <a href="../home/home.php">   <button type="menu" class="menu1">Home</button></a>
        </div>

        <img class="back" src="images/updateDriverDetails.jpg" alt="back" width="100%">

    <div class="form">
        <form method="POST">
            First Name :
            <input type="text" class="edit-d-detail" name="fName" placeholder="First Name" required> <br><br>

            Last Name :
            <input type="text" class="edit-d-detail" name="lName" placeholder="Last Name" required> <br><br>

            Mobile Number : 
            <input type="number" class="edit-d-detail" name="mNo" placeholder="Mobile" pattern="[0-9] {10}" required> <br><br>

            Address :
            <textarea rows="5" cols="40" name="address" class="edit-d-detail"  required> </textarea><br><br>

            Date of Birth :
            <input type="date" class="edit-d-detail" name="dob" placeholder="Date of Birth" required> <br><br><br>

            Licence No :
            <input type="text" class="edit-d-detail" name="license" placeholder="Licence No" required> <br><br><br>

            E-Mail : 
            <input type="email" class="edit-d-detail" name="email" placeholder="E-Mail"> <br><br><br>

            Branch Name : 
            <input type="text" class="edit-d-detail" name="bname" placeholder="branch name"> <br><br><br>

            Account Number :
            <input type="text" class="edit-d-detail" name="accno" placeholder="Account No" required> <br><br><br>

            Branch Number :
            <input type="text" class="edit-d-detail" name="bno" placeholder="Branch No" required> <br><br><br>

            

            <input type="submit" class="save" name="save" value="Save">             

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
       