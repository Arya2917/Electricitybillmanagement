<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "electricity_bills";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Code to handle form submission and database insertion
?>
