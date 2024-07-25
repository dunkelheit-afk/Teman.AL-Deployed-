<?php
require '../includes/config.php';

// Inisialisasi $verification_status dengan nilai false secara default
$verification_status = false;

// Pastikan device_id dan username terdefinisi dan tidak kosong
if (isset($_GET['device_id']) && isset($_GET['username'])) {
    $device_id = $_GET['device_id'];
    $username = $_GET['username'];

    // Check if user exists
    $user_query = "SELECT id FROM users WHERE username='$username'";
    $user_result = $conn->query($user_query);

    if ($user_result->num_rows > 0) {
        $user = $user_result->fetch_assoc();
        $user_id = $user['id'];
        
        // Check if device exists
        $device_query = "SELECT * FROM devices WHERE device_id='$device_id' AND username='$username'";
        $device_result = $conn->query($device_query);

        if ($device_result->num_rows > 0) {
            // Update device verification status
            $update_query = "UPDATE devices SET verified=1, user_id='$user_id' WHERE device_id='$device_id' AND username='$username'";
            if ($conn->query($update_query) === TRUE) {
                $verification_status = true;
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            echo "Device not found";
        }
    } else {
        echo "User not found";
    }
} else {
    echo "Device ID or username not provided";
}

$conn->close();
?>
