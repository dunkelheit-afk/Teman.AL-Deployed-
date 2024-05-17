<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Device Info - Teman.AL</title>
    <link rel="stylesheet" href="../styles/css/device.css">
</head>
<body>
    <div class="container">
        <h1>ESP32 Connection Status</h1>
        <?php
            include_once('../database/connection.php');

            $statusInfo = getConnectionStatus();
            $status = $statusInfo["status"];
            $timestamp = $statusInfo["timestamp"];

            echo "<p>Status: $status</p>";
            echo "<p>Last Connected Timestamp: $timestamp</p>";
        ?>
    </div>
</body>
</html>
