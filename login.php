<?php
session_start();
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

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute SQL statement to fetch user data
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        echo "Login successful";
    } else {
        echo "Invalid username or password";
    }
} else {
    echo "Invalid username or password";
}

$conn->close();
?>
