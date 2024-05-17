<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "teman.al");

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

// Retrieve the form data
$name = $_POST['name'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Alamat = $_POST['Alamat'];
$Kota = $_POST['Kota'];
$email = $_POST['email'];
$Telepon = $_POST['Telepon'];
$Birthday = $_POST['Birthday'];

// Update the user's profile in the database
$query = "UPDATE users SET name = '$name', FirstName = '$FirstName', LastName = '$LastName', Alamat = '$Alamat', Kota = '$Kota', email = '$email', Telepon = '$Telepon', Birthday = '$Birthday' WHERE email='$email'";

if (mysqli_query($conn, $query)) {
    echo "Profile updated successfully!";
} else {
    echo "Error updating profile: ". mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>