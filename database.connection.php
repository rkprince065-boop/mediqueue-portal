<?php
// Database configuration for local XAMPP server
$servername = "localhost";
$username = "root";       // Default XAMPP username is 'root'
$password = "";           // Default XAMPP password is empty
$dbname = "mediqueue_db"; // The database name we created in phpMyAdmin

// Create connection using MySQLi
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection and stop the script if it fails
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Set character set to utf8mb4 for security and compatibility
$conn->set_charset("utf8mb4");
?>