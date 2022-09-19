<?php
require 'configs.php';

$fname = $_POST["name1"];
$lname = $_POST["name2"];
$mail  = $_POST["email"];
$phone = $_POST["contact"];
$feed = $_POST["fb"];

$sql   = "INSERT INTO feedback(First_name, Last_name, Feedback_email, Feedback_phone, Feedback_Description) VALUES ('$fname','$lname','$mail','$phone','$feed')";

iF($conn->query($sql)){
	echo "Succesfully";
}

else{
	echo "Error".$conn->error;
	
}

?>