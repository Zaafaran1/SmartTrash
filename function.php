<?php
include "koneksi.php";

// FUNGSI
function insertPengepul($koneksi, $Nama_Pengepul, $No_Telepon, $Email, $Lokasi, $Jenis_Sampah_Diterima, $Kapasitas, $Jadwal_Pengambilan, $Status_Kerjasama) {
    $query = "INSERT INTO pengepul (Nama_Pengepul, No_Telepon, Email, Lokasi, Jenis_Sampah_Diterima, Kapasitas, Jadwal_Pengambilan, Status_Kerjasama) VALUES ('$Nama_Pengepul', '$No_Telepon', '$Email', '$Lokasi', '$Jenis_Sampah_Diterima', '$Kapasitas', '$Jadwal_Pengambilan', '$Status_Kerjasama')";
    return mysqli_query($koneksi, $query);
}

function updatePengepul($koneksi, $ID_Pengepul, $Nama_Pengepul, $No_Telepon, $Email, $Lokasi, $Jenis_Sampah_Diterima, $Kapasitas, $Jadwal_Pengambilan, $Status_Kerjasama) {
    $query = "UPDATE pengepul SET Nama_Pengepul='$Nama_Pengepul', No_Telepon='$No_Telepon', Email='$Email', Lokasi='$Lokasi', Jenis_Sampah_Diterima='$Jenis_Sampah_Diterima', Kapasitas='$Kapasitas', Jadwal_Pengambilan='$Jadwal_Pengambilan', Status_Kerjasama='$Status_Kerjasama' WHERE ID_Pengepul=$ID_Pengepul";
    return mysqli_query($koneksi, $query);
}

function deletePengepul($koneksi, $ID_Pengepul) {
    $query = "DELETE FROM pengepul WHERE ID_Pengepul=$ID_Pengepul";
    return mysqli_query($koneksi, $query);
}

// INSERT
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'insert') {
    $Nama_Pengepul = $_POST["Nama_Pengepul"];
    $No_Telepon = $_POST["No_Telepon"];
    $Email = $_POST["Email"];
    $Lokasi = $_POST["Lokasi"];
    $Jenis_Sampah_Diterima = $_POST["Jenis_Sampah Diterima"];
    $Kapasitas = $_POST["Kapasitas"];
    $Jadwal_Pengambilan = $_POST["Jadwal_Pengambilan"];
    $Status_Kerjasama = $_POST["Status_Kerjasama"];

    if (insertPengepul($koneksi, $Nama_Pengepul, $No_Telepon, $Email, $Lokasi, $Jenis_Sampah_Diterima, $Kapasitas, $Jadwal_Pengambilan, $Status_Kerjasama)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Data gagal disimpan";
    }
}

// EDIT
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'edit') {
    $ID_Pengepul = $_POST["ID_Pengepul"];
    $Nama_Pengepul = $_POST["Nama_Pengepul"];
    $No_Telepon = $_POST["No_Telepon"];
    $Email = $_POST["Email"];
    $Lokasi = $_POST["Lokasi"];
    $Jenis_Sampah_Diterima = $_POST["Jenis_Sampah Diterima"];
    $Kapasitas = $_POST["Kapasitas"];
    $Jadwal_Pengambilan = $_POST["Jadwal_Pengambilan"];
    $Status_Kerjasama = $_POST["Status_Kerjasama"];

    if (updatePengepul($koneksi, $ID_Pengepul, $Nama_Pengepul, $No_Telepon, $Email, $Lokasi, $Jenis_Sampah_Diterima, $Kapasitas, $Jadwal_Pengambilan, $Status_Kerjasama)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Data gagal diubah";
    }
}

// DELETE
if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['action'] == 'delete') {
    $ID_Pengepul = $_GET["ID_Pengepul"];

    if (deletePengepul($koneksi, $ID_Pengepul)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Data gagal dihapus";
    }
}
?>
