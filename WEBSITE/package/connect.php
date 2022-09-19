<?php
require  'config.php'; //Linking the configuration file



if(isset($_POST["btnSub"])){

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $mobile = $_POST["mobile"];
    $DOB = $_POST["DOB"];
    $address = $_POST["address"];
    $license = $_POST["license"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    $bname = $_POST["bname"];
    $accno = $_POST["accno"];
    $bcode = $_POST["bcode"];

    if($password1 == $password2)/*check passwords*/{

    /* insert data into driver table*/
    $sql= "INSERT INTO driver(fname , lname , gender , mobile ,  DOB , address , license , email , 
            password1 , branch_name , account_no , branch_no )
          
           VALUES('$fname' , '$lname' , '$gender' , $mobile , '$DOB' ,
           '$address' , '$license' , '$email' , '$password1', '$bname' , $accno , $bcode)";

        if($con->query($sql)){
            echo "<script> alert ('Registered successfully!!!')</script>";
        }
        else{
            echo "Error:". $con->error;
        }
    }

    $con->close();   
}
?>
