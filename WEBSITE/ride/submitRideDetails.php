<?php
require 'config.php';

$pickL = $_POST["pick"];
$dropL = $_POST["drop"];
$duration = $_POST["duration"];
$pickD = $_POST["date"];
$pickT = $_POST["time"];
$userID = $_POST["user"];
$veh = $_POST["cars"];

if ( $veh == "Range-Rover Autobiography" ) {
	$total = $duration * 15000;
} else if ( $veh == "Land-Rover Defender" ) {
	$total = $duration * 12000;
}else if ( $veh == "Toyota Prius" ) {
	$total = $duration * 5000;
}else if ( $veh == "Suzuki alto" ) {
	$total = $duration * 2500;
}else if ( $veh == "Honda civic" ) {
	$total = $duration * 6000;
}else if ( $veh == "Suzuki Wagon R" ) {
	$total = $duration * 3000;
}else if ( $veh == "BMW 520d" ) {
	$total = $duration * 7500;
}else if ( $veh == "Toyota Premio" ) {
	$total = $duration * 6500;
}else if ( $veh == "Land-Crusier Prado" ) {
	$total = $duration * 14000;
}else if ( $veh == "Scania bus" ) {
	$total = $duration * 20000;
}else if ( $veh == "Toyota Hilux" ) {
	$total = $duration * 6000;
}else if ( $veh == "Toyota KDH" ) {
	$total = $duration * 15000;
}

$sql = "INSERT INTO ride_details (pickup_loc, drop_loc, duration, pickup_date, pickup_time,user_ID, vehicle, price) VALUES ('$pickL','$dropL', $duration, '$pickD' , '$pickT', '$userID', '$veh', $total )";
if($conn->query($sql)){
	echo "<script> alert('Records added successfully!!!!')</script>";
	echo "<script> window.location.replace('../Payment/paymenth.php')</script>";
}
else{
	echo "<script> alert('ERROR: Could not able to execute the query. ')</script>" ;
	echo "<script> window.location.replace('../ride/Ride.php')</script>";
}

//header("Location: ../Payment/paymenth.php");


?>