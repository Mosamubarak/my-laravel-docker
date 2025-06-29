<?php
// This is the entry point for the PHP application.
// It will test if the server is running correctly and can connect to the database.

$servername = "db"; 
$username = "root"; 
$password = "test123"; 
$dbname = "laravel"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database!";
$conn->close();
?>
