<?php
// Database configuration
$servername = "localhost"; // Change this to your database server address
$username = "yroot"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "shoe_shop"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
