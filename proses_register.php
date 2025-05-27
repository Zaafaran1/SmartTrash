<?php
session_start();

// Ambil input dari form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Tidak ada pengecekan — semua username dan password dianggap valid
$_SESSION['username'] = $username; // bisa digunakan untuk menampilkan nama user nanti

// Redirect ke halaman utama
header ("Location: pengepul.php");
exit;
?>
