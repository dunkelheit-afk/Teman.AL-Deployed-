<?php
require '../includes/config.php';

if (!isset($_SESSION['SESSION_EMAIL'])) {
    header('Location: Login.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM devices WHERE user_id='$user_id' AND verified=1";
$devices = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Teman.AL</title>
    <link rel="stylesheet" href="../styles/css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ4kEZi70u-HXFLjxe71r9592eP-dkLD0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        var map;
        var circle;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: {lat: -34.397, lng: 150.644} // Default center, will be updated later
            });

            fetchAndUpdateMap();
            setInterval(fetchAndUpdateMap, 5000); // Update every 5 seconds
        }

        function fetchAndUpdateMap() {
            $.ajax({
                url: 'fetch_gps_data.php',
                method: 'GET',
                success: function(response) {
                    var data = JSON.parse(response);

                    if (data.error) {
                        alert(data.error);
                        return;
                    }

                    var center = {lat: parseFloat(data.center_lat), lng: parseFloat(data.center_lng)};
                    
                    if (circle) {
                        circle.setMap(null); // Remove the old circle
                    }

                    map.setCenter(center);
                    circle = new google.maps.Circle({
                        map: map,
                        radius: 50, // 50 meters
                        fillColor: '#AA0000',
                        center: center
                    });

                    google.maps.event.addListener(circle, 'click', function() {
                        alert('Latitude: ' + center.lat + '\nLongitude: ' + center.lng);
                    });
                },
                error: function() {
                    alert('Failed to fetch GPS data');
                }
            });
        }
        </script>
            <?php
            if (mysqli_num_rows($query) > 0) {
                $row = mysqli_fetch_assoc($query);
            ?>
    <!-- buat bootstrap -->
</head>
<section onload="initMap()">
    <div class="container">
        <div class="konten">
                <div class="teks">
                    <h1><?php echo $row['name'];?></h1>
                    <p>Selamat Datang!!</p>
                </div>
            <div class="tombol">
            <button class="sunting keluar"><span></span><a href="logout">Keluar</a></button>
            <button class="sunting sunting-profil"><span></span><a href="../modules/profile">Sunting Profil</a></button>
            </div>
            <?php
            }
            ?>
        </div>
        </div>
        <h2><a href="../includes/device.php" style="text-decoration: none; color: #333;">Your Devices</a></h2>
            <ul>
                <?php
                if ($devices->num_rows > 0) {
                    while ($device = $devices->fetch_assoc()) {
                        echo "<li>" . $device['device_id'] . "</li>";
                    }
                } else {
                    echo "<li>No devices found</li>";
                }
                ?>
            </ul>
            <div class="container">
                    <div class="maps">
                    <div id="map" style="height: 500px; width: 100%;"></div>
                <p>©2024 Teman.AL by Macipir Team</p>
            </div>
            </div>
            </div>
    </div>
</section>
</html>