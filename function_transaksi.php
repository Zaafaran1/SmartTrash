<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "koneksi.php";

// FUNGSI
function insertTransaksi($koneksi, $Berat_Kg, $Tanggal_Penerimaan, $Banyak_Poin, $Total_Harga, $Metode_Pengiriman, $Status_Transaksi) {
    $query = "INSERT INTO transaksi_sampah (Berat_Kg, Tanggal_Penerimaan, Banyak_Poin, Total_Harga, Metode_Pengiriman, Status_Transaksi) VALUES ('$Berat_Kg', '$Tanggal_Penerimaan', '$Banyak_Poin', '$Total_Harga', '$Metode_Pengiriman', '$Status_Transaksi')";
    return mysqli_query($koneksi, $query);
}

function updateTransaksi($koneksi, $ID_Transaksi, $Berat_Kg, $Tanggal_Penerimaan, $Banyak_Poin, $Total_Harga, $Metode_Pengiriman, $Status_Transaksi) {
    $query = "UPDATE transaksi_sampah SET Berat_Kg='$Berat_Kg', Tanggal_Penerimaan='$Tanggal_Penerimaan', Banyak_Poin='$Banyak_Poin', Total_Harga='$Total_Harga', Metode_Pengiriman='$Metode_Pengiriman', Status_Transaksi='$Status_Transaksi' WHERE ID_Transaksi=$ID_Transaksi";
    return mysqli_query($koneksi, $query);
}

function deleteTransaksi($koneksi, $ID_Transaksi) {
    $query = "DELETE FROM transaksi_sampah WHERE ID_Transaksi=$ID_Transaksi";
    return mysqli_query($koneksi, $query);
}

// INSERT
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'insert') {
    $ID_Transaksi = $_POST["ID_Transaksi"];
    $Berat_Kg = $_POST["berat"];
    $Tanggal_Penerimaan = $_POST["tanggal_transaksi"];
    $Banyak_Poin = $_POST["poin"];
    $Total_Harga = $_POST["harga"];
    $Metode_Pengiriman = $_POST["metode"];
    $Status_Transaksi = $_POST["status"];

    if (insertPengepul($koneksi, $ID_Transaksi, $Berat_Kg, $Tanggal_Penerimaan, $Banyak_Poin, $Total_Harga, $Metode_Pengiriman, $Status_Transaksi)) {
        header("Location: transaksi_sampah.php");
        exit;
    } else {
        echo "Data gagal disimpan. Error: " . mysqli_error($koneksi);
    }
} 

// EDIT
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'edit') {
    $ID_Transaksi = $_POST["ID_Transaksi"];
    $Berat_Kg = $_POST["berat"];
    $Tanggal_Penerimaan = $_POST["tanggal_transaksi"];
    $Banyak_Poin = $_POST["poin"];
    $Total_Harga = $_POST["harga"];
    $Metode_Pengiriman = $_POST["metode"];
    $Status_Transaksi = $_POST["status"];

    if (updatePengepul($koneksi, $ID_Transaksi, $Berat_Kg, $Tanggal_Penerimaan, $Banyak_Poin, $Total_Harga, $Metode_Pengiriman, $Status_Transaksi)) {
        header("Location: transaksi_sampah.php");
        exit;
    } else {
        echo "Data gagal diubah";
    }
}

// DELETE
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'delete') {
    $ID_Transaksi = $_GET["ID_Transaksi"];

    if (deletePengepul($koneksi, $ID_Transaksi)) {
        header("Location: transaksi_sampah.php");
        exit;
    } else {
        echo "Data gagal dihapus. Error: " . mysqli_error($koneksi);
    }
}
?>
