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

    <!-- buat bootstrap -->

</head>
<section>
    <div class="container">
        <div class="konten">
            <div class="gambar">
                <img src="../assets/images/User 03C.png" alt="Foto profil pengguna">
            </div>
            <?php
            if (mysqli_num_rows($query) > 0) {
                $row = mysqli_fetch_assoc($query);
            ?>
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
            <div class="container">
                    <div class="maps">
                <img src="../assets/images/image.png">
                <p>©2024 Teman.AL by Macipir Team</p>
            </div>
            </div>
            </div>
    </div>
</section>
</html>