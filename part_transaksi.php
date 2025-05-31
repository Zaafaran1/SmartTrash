<?php
session_start();
include 'header.php';

if (!isset($_SESSION['transaksi'])) {
    $_SESSION['transaksi'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID_Transaksi = $_POST["ID_Transaksi"];
    $ID_Nasabah = $_POST["ID_Nasabah"];
    $ID_Pengepul = $_POST["id"];
    $Berat_Kg = floatval($_POST['berat']);
    $Tanggal_Transaksi = $_POST['tanggal_transaksi'];
    $Banyak_Poin = $_POST['poin'] ?? 0;
    $Harga = floatval($_POST['harga']);
    $Metode_Pengiriman = $_POST['metode'];
    $Status_Transaksi = $_POST['status'];

    $Total_Harga = ($Status_Transaksi == "berhasil") ? $Berat_Kg * $Harga : $Harga;

    $_SESSION['transaksi'][] = [
        'ID_Transaksi' => $ID_Transaksi,
        'ID_Nasabah' => $ID_Nasabah,
        'ID_Pengepul' => $ID_Pengepul,
        'berat' => $Berat_Kg,
        'tanggal_transaksi' => $Tanggal_Transaksi,
        'poin' => $Banyak_Poin,
        'harga' => $Harga,
        'total' => $Total_Harga,
        'metode' => $Metode_Pengiriman,
        'status' => $Status_Transaksi
    ];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Transaksi Sampah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #5F9EA0;
            margin: 0;
            padding: 20px;
        }
        form label {
            display: block;
            margin: 8px 0 4px;
        }
        input[type="submit"] {
            margin: 30px 0;
            background-color: #73C2FB;
            font-size: 20px;
            font-weight: bold;
            color: #FFFFFF;
            padding: 10px;
            width: 150px;
            border-radius: 50px;
            border: none;
            cursor: pointer;
        }
        input, select {
            font-size: 15px;
            padding: 10px;
            width: 100%;
            border-radius: 8px;
            margin-bottom: 12px;
        }
        section {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            width: 600px;
            margin: auto;
        }
    </style>
    <script>
        function hitungTotal() {
            const berat = parseFloat(document.getElementById('berat').value) || 0;
            const harga = parseFloat(document.getElementById('harga').value) || 0;
            const status = document.getElementById('status').value;

            let total = (status === "berhasil") ? berat * harga : harga;
            document.getElementById('total').value = total.toFixed(2);
        }

        function toggleInputFields() {
            const status = document.getElementById('status').value;
            const isGagal = status === 'gagal';

            document.getElementById('berat').disabled = isGagal;
            document.getElementById('harga').disabled = isGagal;

            document.getElementById('total').readOnly = !isGagal;
            if (isGagal) {
                document.getElementById('total').value = '';
            } else {
                hitungTotal();
            }
        }
    </script>
</head>
<body>
    <section>
        <h2>Tambah Riwayat</h2>
        <form method="POST">
            <label for="ID_Transaksi">ID Transaksi</label>
            <input type="text" name="ID_Transaksi" id="ID_Transaksi" required>

            <label for="ID_Nasabah">ID Nasabah</label>
            <input type="text" name="ID_Nasabah" id="ID_Nasabah" required>

            <label for="id">ID Pengepul</label>
            <input type="text" name="id" id="id" required>

            <label for="berat">Berat (Kg)</label>
            <input type="number" name="berat" id="berat" step="0.01" oninput="hitungTotal()">

            <label for="tanggal_transaksi">Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" required>

            <label for="harga">Harga per Kg</label>
            <input type="number" name="harga" id="harga" step="100" oninput="hitungTotal()">

            <label for="total">Total Harga</label>
            <input type="number" name="total" id="total" readonly>

            <label for="metode">Metode Pengiriman</label>
            <input type="text" name="metode" id="metode">

            <label for="status">Status Transaksi</label>
            <select name="status" id="status" onchange="toggleInputFields()">
                <option value="berhasil">Berhasil</option>
                <option value="gagal">Gagal</option>
            </select>

            <input type="submit" value="Submit">
        </form>
    </section>
</body>
</html>

<?php include 'footer.php'; ?>
