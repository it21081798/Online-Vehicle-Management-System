<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Online Vehicle Reservation</title>
	<link rel="stylesheet" type="text/css" href="styles/header-footer.css">
	
<style>
  
  body {
 
    background: linear-gradient(to bottom right, #cc0066 -85%, #009999 119%);

}
.card {
    box-shadow: 0px 0px 5px 0px rgb(18, 18, 19);
    margin-top: 5%;
    margin-left:22% ;
    margin-right:50px;
    border-radius:1%;
    width: 50%;
    height: 200px;
    padding: 50px;
    border:1px  gray;  
    background-color: white;
  }


.container { 
    height:50%;
    background-color: rgb(49, 174, 179);
    margin-left:50%;
    margin-top:-30%;
    margin-right:50%;
    width: 180px;
    padding: 50px;  
  }  


  .subhead {
 
    color: white;
    text-align: center;
    font-size:55px;
    padding: 0px;
    margin-bottom: 0%;
    margin-top: 0%;
    margin-left: 0%;
    margin-right: 0%;
    text-shadow: 2px 2px gray;
  }
  h4{
    font-size:18px;
  }
  .news2{
    padding-left:55%;
    margin-top :-25%;
  }
  .newsl{
    padding-left:50%;
    margin-top:-25%;
  }
  p{
	  font-size : 18px;
  }
  .img{
	  margin-left:65%;
	  margin-top:-30%;  
  }
  div.footer{
    background-color: rgb(49, 136, 148);
    position: relative;
    margin-top:10%;
    
}

</style>
</head>
<body>
<div class="bg-image"></div>
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

		

    <a href="../aboutus/AboutUS.php">  <button type="menu" class="menu1">About Us</button></a>

    <a href="../news/news.php">   <button type="menu" class="menu1">News</button></a>

    <a href="../career/careerh.php">  <button type="menu" class="menu1">Career</button></a>

    <a href="../package/package.php">  <button type="menu" class="menu1">Packages</button></a>

    <a href="../ride/Ride.php">  <button type="menu" class="menu1">Ride</button></a>

    <a href="../home/home.php">  <button type="menu" class="menu1">Home</button></a>

</div>
		
	</div>

	<br><br>
    <h2 class="subhead">News Room</h2>
    <div class="column">
        <div class="card">
		<img src="images/award.png" width="40%">
		<div class="newsl">
		<p>14/05/2021</p>
		<h4>Ceylon Cabs won an award for best customer service</h4>
		<p>Ceylon Cabs system was awarded by the best customer service award for 2021</P>
		</div>
		</div>
    </div>
	<div class="column">
        <div class="card">
		<div class="news1">
			<p>05/05/2021</p>
			<h4>Apex Finance partners with Ceylon Cabs for corporate<br> travel solutions</h4>
			<p><b>Ceylon Cabs</b> , Sri Lanka's leading technology driven <br>mobility solutions provider announced
			its most recent<br> partnership with Apex Finance.</P>
		</div>
  		<img src="images/finance.png" class = "img" width="40%">
        </div>
    </div>
    <div class="column">
        <div class="card">
		<img src = "images/open.jpg" width="40%" height="90%"> 
		    <div class="news2">
			<p>12/01/2021</p>
			<h4>Ceylon Cabs officialy launched Head Office in Colombo</h4> 
			<p>Sri Lanka's leading car rental service Ceylon cabs launched its Head office in colombo.</p> 
</div>
        </div>
    </div>
    
    

<div class="footer">
	
	<a href="../terms/termsAndConditions.html" class="l1">Terms and Conditions&nbsp;&nbsp;&nbsp;</a>  <a href="../faq/FAQ.php" class="l1">FAQ</a> </li> 
	<img class="fb" src="images/fbLogo.png" alt="Facebook" width="25px"> 
	<img class="twitter" src="images/twitter.png" alt="Twitter" width="25px"> 
	<img class="insta" src="images/Instagram.png" alt="Instagram" width="25px">
	<img class="linkedin" src="images/LinkedIn.png" alt="LinkedIn" width="25px"> <br> <br>

	<a href="../privacy/privacyPolices.html#" class="l1">Privacy Policies&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li> 
	<a href="../contactus/contct.php" class="l1">Contact Us</a> </li> 
	<img class="email" src="images/email.png" alt="Email" width="30px"> &nbsp; info@Ceyloncabs.lk  <br> <br>

	&nbsp;&nbsp;&nbsp;&copy; Ceyloncabs Tech Inc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Colombo 
	<img class="phone" src="images/phone.png" alt="Phone" width="20px"> &nbsp;	+9441 0000001 / +9441 0000002
			
</div>