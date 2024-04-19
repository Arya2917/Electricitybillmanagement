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

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    die("User not logged in");
}

$username = $_SESSION['username'];

// Prepare and execute SQL statement to fetch bill history for the logged-in user
$sql = "SELECT * FROM bills WHERE customer_id=(SELECT id FROM customers WHERE username='$username')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $bill_history = array();
    while ($row = $result->fetch_assoc()) {
        $bill_history[] = $row;
    }
    echo json_encode($bill_history);
} else {
    echo "No bills found";
}

$conn->close();
?>
