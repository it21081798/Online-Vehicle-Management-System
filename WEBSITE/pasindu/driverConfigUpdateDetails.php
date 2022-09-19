<?php
require 'driverConfigDashbord.php'; //Linking the configuration file

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
    $license = $_POST["license"];
    $email = $_POST["email"];
    $branch_name = $_POST["bname"];
    $account_no = $_POST["accno"];
    $branch_no = $_POST["bno"];

    $sql= "UPDATE driver SET fname='$fname', lname='$lname', mobile='$mobile',  address='$address', 
            DOB='$dob', license='$license', email='$email', branch_name='$branch_name', account_no='$account_no', branch_no='$branch_no' where id=$ID";
            
    
        if($conn->query($sql)){
            
            header("Location: driverDashbord.php");
            echo "<script> alert ('Updated successfully')</script>";
        }
        else{
            echo "Error:". $conn->error;
        }
    

    $conn->close();   
}
?>
