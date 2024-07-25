<?php
include '../includes/config.php';

session_start();
if (!isset($_SESSION['SESSION_EMAIL'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM devices WHERE user_id='$user_id' AND verified=1";
$devices = $conn->query($sql);
$gps_points = [];

while ($device = $devices->fetch_assoc()) {
    $device_id = $device['device_id'];
    $sql = "SELECT * FROM gps_data WHERE device_id='$device_id' ORDER BY created_date DESC LIMIT 5";
    $gps_data = $conn->query($sql);

    while ($data = $gps_data->fetch_assoc()) {
        $lat = $data['latitude'];
        $lng = $data['longitude'];
        $gps_points[] = ['lat' => $lat, 'lng' => $lng];
    }
}

if (empty($gps_points)) {
    echo json_encode(['error' => 'No GPS data found']);
    exit();
}

// Calculate the center point of the last 5 GPS data points
$lat_sum = 0;
$lng_sum = 0;
foreach ($gps_points as $point) {
    $lat_sum += $point['lat'];
    $lng_sum += $point['lng'];
}
$center_lat = $lat_sum / count($gps_points);
$center_lng = $lng_sum / count($gps_points);

$response = [
    'center_lat' => $center_lat,
    'center_lng' => $center_lng
];

echo json_encode($response);
