<!DOCTYPE html>
<html>
<head>
	<title>Online Vehicle Reservation</title>

	<link rel="stylesheet" type="text/css" href="styles/header-footer.css">
    
<style>
	

	.card {
		margin-top:1%;
		margin-left:30% ;
		width: 35%;
		height:10%;
		padding: 50px 50px;

	}
	.fieldn{
		color:white;
	}
	.field{                        /*field name*/
		text-align: left;
		font-size: 15px;
		color:white;
		margin-right:20px;
		margin-left:5%;
		
	}

	.class1{                     /*input box*/
		width:95%;
		position:relative;
		left:0px;
		border-color:darkgray;
		padding: 10px;
		margin: 5px 0 10px 0;
		border: none;
		background: #f1f1f1bd;
		border-radius: 8px;

	}

	.register{                               /*button*/
		margin-left:15%;
		border: none;
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 17px;
		transition-duration: 0.4s;
		padding: 15px;
		font-weight: bold;
		border-radius: 15px;
		margin-right: 5px;
		margin-bottom:0px;
		margin-left: 35%;
		background-color:white;
		width: 30%; 
		position:relative;
		top: -25px;     

	}
	.register:hover {
		background-color:brown ;
	}

	.dob{
		margin-left:70%;
		margin-top:-34.7%;
		margin-right:4%;
	}

	.gen{
		margin-left: 25px;
		margin-top:2px;
	}

	.sex{
		color:white;
	}

	.subhead {
	
		color: gray;
		font-family: Arial, Helvetica, sans-serif;
		text-align:justify;
		font-size: 50px;
		margin-bottom: 30px;
		margin-left:12%;
		margin-top: 0px;
		padding-top: 40px;
		
	}
	.bcode{
		padding-left:60%;
		margin-top:-18.3%;
		padding-right:3%;
	}
	.bno{
		padding-right:60%;
	}

	.bank{
		font-size:20px;
		color:white;
		margin-left:220px;

	}
	.page{
		margin-top:-118%;

	}


	div.footer{
		background-color: rgb(49, 136, 148);
		position: relative;
		margin-top:2.4%;
	
}

</style>

	<script src="js/myScript.js"></script>
</head>
<body>
	
	<div class="header">
			
			<ul class="menu">
				<li class="menu"> <a href="../login_selection/loginSelection.php">Login</a> </li>
				<li class="menu"> <a href="../reg_selection/regSelection.php">Sign Up</a> </li>
			</ul>
			
			<img class="logo" src="images/logo.png" alt="logo">
			<h2 >Ceylon Cabs</h2>
			<h3 >- Rent your car - </h3>

			<input type="text" name="searchHome" placeholder="Search here" class="search-box" >

			<a href="../aboutus/AboutUS.php">	<button type="menu" class="menu1">About Us</button></a>

			<a href="../news/news.php"> <button type="menu" class="menu1">News</button></a>

			<a href="../career/career.php">  <button type="menu" class="menu1">Career</button></a>

			<a href="../package/package.php"> <button type="menu" class="menu1">Packages</button></a>

			<a href="../ride/Ride.php"> <button type="menu" class="menu1">Ride</button></a>

			<a href="../home/home.php"> <button type="menu" class="menu1">Home</button></a>
		
	</div>
	</div>
	<img src="images/img4.png" width="100%"  >
	<div class="page">
	<br>
    <!-- create the registration form -->
	 
	<form onsubmit="return checkPassword ()"  action="connect.php"   method="post"  >
		
			<div class="card">
				
			<h2 class="subhead">Driver Registration</h2><br><br>

			<h2 class="field">First Name:</h2><br>
			<input type="text" class="class1"  name="fname" required placeholder><br><br>
		
			<h2 class="field">Last Name:</h2><br>
			<input type="text" class="class1" name="lname" required placeholder><br><br>
		
			<h2 class="field">Sex:</h2><br>
			<div class="sex">
			<input type="radio" name="gender" class="gen" value="male">Male
			<input type="radio" name="gender" class="gen" value="female">Female
			</div>
			<br><br>
		
			<h2 class="field">Mobile Number:</h2><br>
			<input type="text" class="class1"  pattern="[0-9]{10}" required title="10 digits" name="mobile" ><br><br>
	
			<div class="dob">
				<h2 class="field">Date of Birth:</h2>
				<input type="date" min="1980-01-01" max="2005-12-31" class="class1" name="DOB" required>
			</div>
			
			<br><br><br><br>
			<br><br><br>

			<h2 class="field">Address:</h2><br>
			<textarea rows="5" cols="40" class="class1" name="address"></textarea><br><br>
			
			<h2 class="field">License Number:</h2><br>
			<input type="text" class="class1" name = "license" required><br><br>
		
			<h2 class="field">Email:</h2><br>
			<input type="email" class="class1"  required title="abc@gmail.com" name="email"><br><br>
			
			
			<h2 class="field">Password:</h2><br>
			<input type="password" name="password1" class="class1" id="pwd1" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" title="Must Contain At Least One Number And One Uppercase And Lowercase Letter,And At Least 10 Or More Charactters"><br><br>
		    
			<h2 class="field">Repeat Password:</h2><br>
			<input type="password" name="password2" class="class1" id="pwd2" >
			
			<br>
			<p class= "bank">Bank Details</p>
			
			
			<br>
			<h2 class="field">Branch Name:</h2><br>
			<input type="text" class="class1" name="bname" required ><br><br>

			<div class="bno">
			<h2 class="field">Account Number:</h2><br>
			<input type="text" class="class1" name="accno" required ><br><br>
			</div>

			<div class="bcode">
			<h2 class="field">Branch Code:</h2><br>
			<input type="text" class="class1" name="bcode" required ><br><br></div><br>
			
			<input type="checkbox" onchange="AcceptTerms()" id="chkTerms" class="fieldn">Accept Privacy Policy & Terms.<br>
			<br><br>
			
		<button type="submit" name="btnSub" id="subReg" class="register" disabled >Register</button>

	
		
			</div>
	</from>

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