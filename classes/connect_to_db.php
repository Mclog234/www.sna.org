<?php
$serverName = "localhost";
$username = "root";
$password = "";
$database = "societyofarts";

// Create connection
    
$conn = mysqli_connect($serverName, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>