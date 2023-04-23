<?php
$servername = "database AWS EndPoint LINK";
$port = 3306;
$username = "admin";
$password = "password";
$db = "database-NAME";

// Create a new MySQLi instance and handle any connection errors
$conn = new mysqli($servername, $username, $password, $db, $port);
if ($conn->connect_error) {
    error_log("Failed to connect to MySQL: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
