<?php
session_start();
$error=''; 
if(isset($_POST['sub'])){
 if(empty($_POST['UserName']) || empty($_POST['Paswd'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
    
    $uName=$_POST['UserName'];
    $pswd=$_POST['Paswd'];
    
    $conn = mysqli_connect("localhost", "root", "");
    
    $db = mysqli_select_db($conn, "vehicle");
    
    $query = mysqli_query($conn, "SELECT * FROM name WHERE password1='$pswd' AND email='$uName'");
    
    $rows = mysqli_num_rows($query);

    if($rows == 1){
       while($count = $query->fetch_assoc()){
           $ID = $count['id'];
       }
        $_SESSION['id'] = $ID;

    header("Location: UserProfile.php"); 
    }
    else
    {
    $error = "Your Username or Password is Invalid";
    }
    mysqli_close($conn); 
    }
   }
?>