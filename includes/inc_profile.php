<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Profile Page - Teman.AL</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../styles/css/profile.css">
</head>
<body>
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="#">Profile Pengguna</a>
        <a class="nav-link" href="../modules/profile_wali.php">Profile Wali</a>
        <a class="nav-link" href="../includes/ComingSoon/">Keamanan Akun</a>
        <a class="nav-link" href="../modules/qr_code.php">QR - Code</a>
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <?php
                if (mysqli_num_rows($query) > 0) {
                    $row = mysqli_fetch_assoc($query);
                    // Now you can safely access $row['name'], $row['FirstName'], $row['LastName'], etc.
                ?>
                <div class="card-body">
                <form action="../includes/update_profile" method="post">
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="name">Username</label>
                            <input class="form-control" id="name" type="text" name="name" placeholder="Masukkan Username Baru Anda" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>" required>   
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="FirstName">Nama Awal</label>
                                <input class="form-control" id="FirstName" type="text" name="FirstName" placeholder="Masukkan Nama Awal Anda" value="<?php echo isset($row['FirstName']) ? $row['FirstName'] : ''; ?>" required>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="LastName">Nama Akhir</label>
                                <input class="form-control" id="LastName" type="text" name="LastName" placeholder="Masukkan Nama Akhir Anda" value="<?php echo isset($row['LastName']) ? $row['LastName'] : ''; ?>" required>
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (Alamat Lengkap)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="Alamat">Alamat Lengkap</label>
                                <input class="form-control" id="Alamat" type="text" name="Alamat" placeholder="Masukkan Alamat Lengkap" value="<?php echo isset($row['Alamat']) ? $row['Alamat'] : ''; ?>" required>
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="Kota">Kota</label>
                                <input class="form-control" id="Kota" type="text" name="Kota" placeholder="Masukkan Kota Asal Anda" value="<?php echo isset($row['Kota']) ? $row['Kota'] : ''; ?>" required>
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Alamat Email</label>
                            <input class="form-control" id="inputEmailAddress" type="email" name="email" placeholder="Masukkan Alamat Email Anda" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>" required>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="Telepon">Nomor Telepon</label>
                                <input class="form-control" id="Telepon" type="tel" name="Telepon" placeholder="Masukkan Nomor Telepon Anda" value="<?php echo isset($row['Telepon']) ? $row['Telepon'] : ''; ?>" required>
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="Birthday">Tempat & Tanggal Lahir</label>
                                <input class="form-control" id="Birthday" type="text" name="Birthday" placeholder="Masukkan Tempat & Tanggal Lahir" value="<?php echo isset($row['Birthday']) ? $row['Birthday'] : ''; ?>" required>
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Save changes</button>
                        <?php
                    }
                    ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


