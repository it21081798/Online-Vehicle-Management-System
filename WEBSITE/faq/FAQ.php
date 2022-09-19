<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Online Vehicle Reservation</title>
	    <link rel="stylesheet" type="text/css" href="styles/headerFooter.css">
        
      <style>
          h1{
              font-size: 35px;
              text-align: center;
              text-decoration: solid;
              font-family:Arial, Helvetica, sans-serif;
              margin-top: 40px;
              margin-bottom: 40px;
              color: bisque;
            }


          .hrv{
              color: black;
              text-align: left;
              margin-top: 20px;
              margin-left: 20px;
              margin-right: 20px;
              margin-bottom: 20px;
              font-family: sans-serif;
              
          }

       
          p{
              font-size: 20px;
              text-align: justify;
              margin-top: 10px;
              margin-left: 20px;
              margin-right: 20px;
              margin-bottom: 20px;
          }

          .div-1{
              
              margin-left: 100px;
              margin-right: 100px;
              border-width: 2px;
              border-style: solid;
              border-color: rgb(118, 120, 255) ;
              margin-bottom: 25px;
              border-radius: 15px;
              background-color: rgba(223, 245, 252, 0.705);
          }

          .all{
              position: absolute;
              top: 30%;
            }

          .footer{
                position: relative;
                margin-top: 5%;
            }

        .contact-us{
            font-size: 20px;
            margin-left: 50px;
            color: rgb(255, 255, 255);
            font-weight: normal;
            margin-bottom: 5%;
            margin-top: 3%;
        }      
        
        a{
            color: rgb(118, 166, 255);
            transition-duration: 0.3s;
        }

        a:hover{
            color: rgb(255, 93, 93);
        }

         

      </style>  
    </head>

    <body>
        <div class="header">
		    <ul class="menu">
                <li class="menu"> <a href="../login_selection/loginSelection.php">Login</a> </li>
                <li class="menu"> <a href="../reg_selection/regSelection.php">Sign Up</a> </li>
            </ul>
            
            <img class="logo" src="images/logo.png" alt="logo">
            <h2 class="CC">Ceylon Cabs</h2>
            <h3 class="RYC">- Rent your car - </h3>
    
            <input type="text" name="searchHome" placeholder="Search here" class="search-box" >
    
            <a href="../aboutus/AboutUS.php"> <button type="menu" class="menu1">About Us</button></a>
            <a href="../news/news.php"> <button type="menu" class="menu1">News</button></a>
            <a href="../career/careerh.php"> <button type="menu" class="menu1">Career</button></a>
            <a href="../package/package.php"> <button type="menu" class="menu1">Packages</button></a>
            <a href="../ride/Ride.php"> <button type="menu" class="menu1">Ride</button></a>
            <a href="../home/home.php">  <button type="menu" class="menu1">Home</button></a>
        </div>

    <div class="quest-main">

        <img class="question" src="images/question.jpg" alt="Background" width="100%">

        <div class="all">
            <h1>Frequently Asked Questions</h1> 

        <div class="div-1">
            <h3 class="hrv">How to reserve a vehicle</h3>
            <p>&nbsp;&nbsp;&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum euismod in diam eget facilisis. Vestibulum 
                auctor elit ac pulvinar consectetur. Donec convallis bibendum sapien ac lobortis. Donec eget urna lacus. Sed 
                ultrices nulla nec nisl laoreet, id vulputate urna lobortis. Ut scelerisque convallis nibh, in consectetur magna 
                cursus at. Integer est ligula, aliquam et nisl aliquam, hendrerit tempor dui.</p>
        </div>

        <div class="div-1">
            <h3 class="hrv">How to reserve a vehicle</h3>
            <p>&nbsp;&nbsp;&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum euismod in diam eget facilisis. Vestibulum 
                auctor elit ac pulvinar consectetur. Donec convallis bibendum sapien ac lobortis. Donec eget urna lacus. Sed 
                ultrices nulla nec nisl laoreet, id vulputate urna lobortis. Ut scelerisque convallis nibh, in consectetur magna 
                cursus at. Integer est ligula, aliquam et nisl aliquam, hendrerit tempor dui.</p>
        </div>

        <div class="div-1">
            <h3 class="hrv">How to reserve a vehicle</h3>
            <p>&nbsp;&nbsp;&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum euismod in diam eget facilisis. Vestibulum 
                auctor elit ac pulvinar consectetur. Donec convallis bibendum sapien ac lobortis. Donec eget urna lacus. Sed 
                ultrices nulla nec nisl laoreet, id vulputate urna lobortis. Ut scelerisque convallis nibh, in consectetur magna 
                cursus at. Integer est ligula, aliquam et nisl aliquam, hendrerit tempor dui.</p>
        </div>
        
        <div class="div-1">
            <h3 class="hrv">How to reserve a vehicle</h3>
            <p>&nbsp;&nbsp;&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum euismod in diam eget facilisis. Vestibulum 
                auctor elit ac pulvinar consectetur. Donec convallis bibendum sapien ac lobortis. Donec eget urna lacus. Sed 
                ultrices nulla nec nisl laoreet, id vulputate urna lobortis. Ut scelerisque convallis nibh, in consectetur magna 
                cursus at. Integer est ligula, aliquam et nisl aliquam, hendrerit tempor dui.</p>
        </div>
        
        <div class="div-1">
            <h3 class="hrv">How to reserve a vehicle</h3>
            <p>&nbsp;&nbsp;&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum euismod in diam eget facilisis. Vestibulum 
                auctor elit ac pulvinar consectetur. Donec convallis bibendum sapien ac lobortis. Donec eget urna lacus. Sed 
                ultrices nulla nec nisl laoreet, id vulputate urna lobortis. Ut scelerisque convallis nibh, in consectetur magna 
                cursus at. Integer est ligula, aliquam et nisl aliquam, hendrerit tempor dui.</p>
        </div>

        <h2 class="contact-us">Problem still not sloved ? <a href="../contactus/contct.php">Click Here</a> to contact us </h2>

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
       
    </div>   
</div>
        
    
    
        


        

    
        
    
        
       

    </body>
</html>