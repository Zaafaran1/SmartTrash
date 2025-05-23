<?php
include 'register.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Lakukan validasi sederhana
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Cek apakah user ada di database
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) === 1) {
    $_SESSION['username'] = $username;
} else {
    echo "Login gagal. Username atau password salah.";
}

?>