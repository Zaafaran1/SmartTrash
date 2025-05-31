<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "koneksi.php";

// FUNGSI
function insertPengepul($koneksi, $Nama_Pengepul, $No_Telepon, $Email, $Lokasi, $Jenis_Sampah_Diterima, $Kapasitas, $Tanggal_Penerimaan, $Status_Kerjasama) {
    $query = "INSERT INTO pengepul (Nama_Pengepul, No_Telepon, Email, Lokasi, Jenis_Sampah_Diterima, Kapasitas, Tanggal_Penerimaan, Status_Kerjasama) VALUES ('$Nama_Pengepul', '$No_Telepon', '$Email', '$Lokasi', '$Jenis_Sampah_Diterima', '$Kapasitas', '$Tanggal_Penerimaan', '$Status_Kerjasama')";
    return mysqli_query($koneksi, $query);
}

function updatePengepul($koneksi, $ID_Pengepul, $Nama_Pengepul, $No_Telepon, $Email, $Lokasi, $Jenis_Sampah_Diterima, $Kapasitas, $Tanggal_Penerimaan, $Status_Kerjasama) {
    $query = "UPDATE pengepul SET Nama_Pengepul='$Nama_Pengepul', No_Telepon='$No_Telepon', Email='$Email', Lokasi='$Lokasi', Jenis_Sampah_Diterima='$Jenis_Sampah_Diterima', Kapasitas='$Kapasitas', Tanggal_Penerimaan='$Tanggal_Penerimaan', Status_Kerjasama='$Status_Kerjasama' WHERE ID_Pengepul=$ID_Pengepul";
    return mysqli_query($koneksi, $query);
}

function deletePengepul($koneksi, $ID_Pengepul) {
    $query = "DELETE FROM pengepul WHERE ID_Pengepul=$ID_Pengepul";
    return mysqli_query($koneksi, $query);
}

// INSERT
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'insert') {
    $Nama_Pengepul = $_POST["nama"];
    $No_Telepon = $_POST["nomor"];
    $Email = $_POST["email"];
    $Lokasi = $_POST["lokasi"];
    $Jenis_Sampah_Diterima = $_POST["jenis"];
    $Kapasitas = $_POST["kapasitas"];
    $Tanggal_Penerimaan = $_POST["tanggal"];
    $Status_Kerjasama = $_POST["status"];

    if (insertPengepul($koneksi, $Nama_Pengepul, $No_Telepon, $Email, $Lokasi, $Jenis_Sampah_Diterima, $Kapasitas, $Tanggal_Penerimaan, $Status_Kerjasama)) {
        header("Location: pengepul.php");
        exit;
    } else {
        echo "Data gagal disimpan. Error: " . mysqli_error($koneksi);
    }
} 

// EDIT
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'edit') {
    $ID_Pengepul = $_POST["id"];
    $Nama_Pengepul = $_POST["nama"];
    $No_Telepon = $_POST["nomor"];
    $Email = $_POST["email"];
    $Lokasi = $_POST["lokasi"];
    $Jenis_Sampah_Diterima = $_POST["jenis"];
    $Kapasitas = $_POST["kapasitas"];
    $Tanggal_Penerimaan = $_POST["tanggal"];
    $Status_Kerjasama = $_POST["status"];

    if (updatePengepul($koneksi, $ID_Pengepul, $Nama_Pengepul, $No_Telepon, $Email, $Lokasi, $Jenis_Sampah_Diterima, $Kapasitas, $Tanggal_Penerimaan, $Status_Kerjasama)) {
        header("Location: pengepul.php");
        exit;
    } else {
        echo "Data gagal diubah";
    }
}

// DELETE
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'delete') {
    $ID_Pengepul = $_GET["ID_Pengepul"];

    if (deletePengepul($koneksi, $ID_Pengepul)) {
        header("Location: pengepul.php");
        exit;
    } else {
        echo "Data gagal dihapus. Error: " . mysqli_error($koneksi);
    }
}
?>
