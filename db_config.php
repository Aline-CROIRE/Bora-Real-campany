<?php
// Database configuration
$dbHost = 'localhost'; // Hostname
$dbUsername = 'root'; // Database username
$dbPassword = ''; // Database password
$dbName = 'borareal'; // Database name

// Create a database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>