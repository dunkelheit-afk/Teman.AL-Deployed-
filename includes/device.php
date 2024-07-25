<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Device Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .success {
            color: green;
            font-weight: bold;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        require '../includes/verify_device.php'; // File PHP untuk verifikasi device

        if ($verification_status === true) {
            echo '<p class="success">Device berhasil diverifikasi.</p>';
            echo '<p>Device ID: ' . htmlspecialchars($device_id) . '</p>';
            echo '<p>Username: ' . htmlspecialchars($username) . '</p>';
            echo '<p>Status: Terverifikasi</p>';
        } else {
            echo '<p class="error">Gagal verifikasi device.</p>';
        }
        ?>
        <a href="../modules/homepage.php">Kembali ke Dashboard</a>
    </div>
</body>
</html>
