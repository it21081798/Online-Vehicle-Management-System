<?php
session_start();
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 echo $error = "Username or Password is Invalid";
 }
 else
 {
    //Define $user and $pass
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    //Establishing Connection with server by passing server_name, user_id and pass as a patameter
    $conn = mysqli_connect("localhost", "root", "");
    //Selecting Database
    $db = mysqli_select_db($conn, "vehicle");
    //sql query to fetch information of registerd user and finds user match.
    $query = mysqli_query($conn, "SELECT * FROM driver WHERE password1='$pass' AND email='$user'");
    
    $rows = mysqli_num_rows($query);
    if($rows == 1){
       while($count = $query->fetch_assoc()){
           $ID = $count['id'];
       }
        $_SESSION['id'] = $ID;
    header("Location: driverDashbord.php"); // Redirecting to other page
    }
    else
    {
    $error = "Your Username or Password is Invalid";
    }
    mysqli_close($conn); // Closing connection
    }
   }
    
   ?>