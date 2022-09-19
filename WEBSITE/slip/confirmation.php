<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css"  href="headerfooterslip.css">
	<link rel="stylesheet" type="text/css"  href="confirmation.css"> 
    <style>
        div.footer{
            background-color: rgb(49, 136, 148);
            position:relative;
            margin-top: 15%;   
        }
    </style>


</head>
<body>
  
<!-- Begining of the header -->
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

    <a href="../aboutus/AboutUS.php">   <button type="submit" class="menu1">About Us</button></a>
    <a href="../news/news.php">   <button type="submit" class="menu1">News</button></a>
    <a href="../career/careerh.php">  <button type="submit" class="menu1">Career</button></a>
    <a href="../package/package.php">  <button type="submit" class="menu1">Packages</button></a>
    <a href="../ride/Ride.php">  <button type="submit" class="menu1">Ride</button></a>
    <a href="../home/home.php">  <button type="submit" class="menu1">Home</button></a>
    <!--<img class="background" src="images/back.jpg" alt="background" width="1080" > -->	
</div>
<!--Body--> 
<body>



    <!-- Rservation Confirmation -->
    <div class="border">

        <h1 class="topic">Reservation has been successful</h1>

        <img src=tick.png alt="Tick"  width= "400" height="400" class="image">
    </div>

  
        <button class="button"><a href="../home/home.php" class="link" >Back to home page</a></button>


<!-- Beginning of the footer -->
<div class="footer">
	
    <a href="../terms/termsAndConditions.html" class="l1">Terms and Conditions&nbsp;&nbsp;&nbsp;</a>  <a href="../faq/FAQ.php" class="l1">FAQ</a> </li> 
    <img class="fb" src="fbLogo.png" alt="Facebook" width="25px"> 
    <img class="twitter" src="twitter.jpg" alt="Twitter" width="25px"> 
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
</body>
</html>