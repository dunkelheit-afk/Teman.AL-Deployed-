<?php
function getConnectionStatus() {
    // Set the timezone to Indonesia
    date_default_timezone_set('Asia/Jakarta');

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'esp32_status';

    // Create connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get current timestamp in Indonesia time
    $timestamp = date('Y-m-d H:i:s');

    // Check if ESP32 is active
    $isEsp32Active = isEsp32Active(); // Implement this function to check if ESP32 is active

    // Determine status based on ESP32 activity
    $status = $isEsp32Active ? "Connected" : "Disconnected";

    $sql = "INSERT INTO esp32_status (id, status, timestamp) VALUES (1, ?, ?) ON DUPLICATE KEY UPDATE status = VALUES(status), timestamp = VALUES(timestamp)";

    
    // Prepare and execute SQL statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $status, $timestamp);
    $stmt->execute();
    $stmt->close();

    // Close connection
    $conn->close();

    // Return current status and timestamp
    return array("status" => $status, "timestamp" => $timestamp);
}

// Function to check if ESP32 is active
function isEsp32Active() {
        // IP address of the ESP32
        $esp32_ip = '192.168.1.100'; // Ganti dengan alamat IP ESP32 yang sebenarnya
    
        // Ping the ESP32
        exec(sprintf('ping -c 1 -W 2 %s', escapeshellarg($esp32_ip)), $res, $rval);
    
        // If ping result contains "time=" string, it means ESP32 is reachable
        return $rval === 0;

}
?>
