<?php
require  'config1.php'; //Linking the configuration file



if(isset($_POST["btnSub1"])){

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $mobile = $_POST["mobile"];
    $DOB = $_POST["DOB"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    

    if($password1 == $password2){
    $sql= "INSERT INTO name(fname , lname , gender , mobile ,  DOB , address ,  email , 
            password1 ,password2  )
          
           VALUES('$fname' , '$lname' , '$gender' , $mobile , '$DOB' ,
           '$address' , '$email' , '$password1','$password2' )";

        if($con->query($sql)){
            echo "<script> alert ('Registered successfully!!!')</script>";
        }
        else{
            echo "Error:". $con->error;
        }
    }

    $con->close();   
}

header("Location: ../userprofile/userLogin.php");
exit();
?>
