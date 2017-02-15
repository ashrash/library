<?php
	$servername = "localhost";
$username = "rash";
$password = "myaz290d";

// Create connection
$connect = new mysqli($servername, $username, $password,"btech");

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   
          
} 
?> 