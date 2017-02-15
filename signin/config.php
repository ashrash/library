<?php
	$servername = "localhost";
$username = "rash";
$password = "myaz290d";

// Create connection
$conn = new mysqli($servername, $username, $password,"Library");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?> 