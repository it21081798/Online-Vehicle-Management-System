<?php

$conn = new mysqli("localhost", "root", "", "vehicle");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>