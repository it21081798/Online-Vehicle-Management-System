<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
    <link rel="stylesheet" type="text/css"  href="headerfooter.css">
	<link rel="stylesheet" type="text/css"  href="career.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    div.footer{
        background-color: rgb(49, 136, 148);
        position:relative;
        margin-top: -73%;
        
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

		<a href="../aboutus/AboutUS.php"><button type="submit" class="menu1">About Us</button></a>
		<a href="../news/news.php"><button type="submit" class="menu1">News</button></a>
		<a href="../career/careerh.php"><button type="submit" class="menu1">Career</button></a>
		<a href="../package/package.php"><button type="submit" class="menu1">Packages</button></a>
		<a href="../ride/Ride.php"><button type="submit" class="menu1">Ride</button></a>
		<a href="../home/home.php"><button type="submit" class="menu1">Home</button></a>
		<!--<img class="background" src="images/back.jpg" alt="background" width="1080" > -->	
	</div>
	<body>
<!-- After Heading design -->

<!-- Topic division -->
      <div class="topic">
          <h1>CAREERS</h1>
          <h3>Join With & Work With Us To</h3>
          <h5>move yourself & the world forward.</h5>
      </div>

   
      <!-- Search Bar -->
      <div class="s">
        <input type="text" name="searchHome" placeholder="Search...">
      </div>

<!-- Form Start -->

<div class="form2"> 

    <form method="POST" action="" class="career-form"></form>

           <lable for="finame" class="fi">First Name*</lable><br>
           <input type="text" name="namef" size="40" class="ff1" required>
           <br><br>
           <lable for="laname" class="la">Last Name*</lable><br>
           <input type="text" name="namel" size="40" class="ff1" required>
           <br><br>
           <lable for="emailc" class="mailc">E-mail*</lable><br>
           <input type="email" name="mail" size="40" class="ff1" required>
           <br><br>
           <lable for="contactnumber" class="cont">Contact Number*</lable><br>
           <input type="text"  name="contnum" size="40" class="ff1"  required>
           <br><br>
           <lable for="location" class="loc">Location*</lable><br>
           <input type="text"  name="locat"  size="40" class="ff1" required><br>
           <br><br>
           <lable for="positionID"  class="posit">Position ID*</lable><br>
           <input type="text"  name="num" size="40" class="ff1" required>
           <br><br>
           <lable for="uploadcv" class="upcv">Upload CV*</lable><br>
           <input type="file" id="myfile" name="filename" class="up" required>
           <br><br>
           <input type="submit" value="SUBMIT" class="su">
    </form>     

</div>


<!-- Details -->

<div class="details1">
    <h2><i class="fa fa-map-marker style="font-size:30px"></i>Matara</h2>
    <h2 class="c1">Posted on 8th September 2021</h2>
    <h2 class="c2">Position_ID 01: Drivers vacancies 02</h2>
</div>

<div class="details2">
    <h2><i class="fa fa-map-marker style="font-size:30px"></i>Panadura</h2>
    <h2>Posted on 5th September 2021</h2>
    <h2>Position_ID 01: Drivers vecancies 03</h2> 
    <h2>Position_ID 02: Web developer vacancies 03</h2>
</div>

<div class="details3">
    <h2><i class="fa fa-map-marker style="font-size:30px"></i>Moratuwa</h2>
    <h2>Posted on 3th September 2021</h2>
    <h2>Position_ID 01: Driver vacancies 01</h2>
</div>

<div class="details4">
    <h2><i class="fa fa-map-marker style="font-size:30px"></i>Galle</h2>
    <h2>Posted on 3th September 2021</h2>
    <h2>Position_ID 01: Driver vacancies 02</h2>
    <h2>Position_ID 03: Manager vacancies 01</h2>
</div>













<!-- Footer Design start -->
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

</html>

</body>












































