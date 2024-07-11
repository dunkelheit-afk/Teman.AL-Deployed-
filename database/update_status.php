<?php
// Retrieve status value from the GET request
$status = $_GET['status'];

// Database connection configuration
$host = 'localhost';
$username = 'u932941492_Teman_AL';
$password = 'Dr49m3t0h377';
$database = 'esp32_status';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to update status in the database
$sql = "UPDATE esp32_status SET status = ? WHERE id = 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $status);

// Execute the SQL statement
if ($stmt->execute()) {
    echo "Status updated successfully";
} else {
    echo "Error updating status: " . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
