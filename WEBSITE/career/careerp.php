<?php 
require 'config.php';

$fname = $_POST["name1"];
$lname = $_POST["name2"];
$email  = $_POST["mail"];
$cont   = $_POST["cnum"];
$loca   = $_POST["loca"];
$number = $_POST["num"];

$sql   = "INSERT INTO job(First_name,Last_name,Career_email,career_contact_number,Location,Career_number)VALUES('$fname','$lname','$email',$cont,'$loca',$number)";



if($conn->query($sql)){
	echo "Succesfully";
}

else{
	echo "Error".$conn->error;
	
}

?>


