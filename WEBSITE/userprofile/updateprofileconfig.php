<?php
require 'config.php'; 
session_start();
if(!isset($_SESSION['id'])){
     
}
$ID = $_SESSION["id"];  

if(isset($_POST["save"])){

      

    $fname = $_POST["fName"];
    $lname = $_POST["lName"];
    $mobile = $_POST["mNo"];
    $address = $_POST["address"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    

    $sql= "UPDATE name SET fname='$fname', lname='$lname', mobile='$mobile',  address='$address', 
            DOB='$dob',  email='$email' where id=$ID";
            
    
        if($conn->query($sql)){
            
            header("Location: ../userprofile/UserProfile.php");
            echo "<script> alert ('Updated successfully')</script>";
        }
        else{
            echo "Error:". $conn->error;
        }
    

    $conn->close();   
}


?>
