<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #1b4d7a;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 100px;
        }

        .button-container button {
            background-color:rgb(135, 206, 255);
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h1>Pengelola</h1>
    <br><br>
    <div class="button-container">
        <button onclick = "location='nasabah.php'">Nasabah</button>
        <button onclick = "location='laporan.php'">Laporan Keuangan</button>
        <button onclick = "location='password.php'">Data Pengepul</button>
        <button onclick = "location='nasabah.php'">Penukaran Poin</button>
    </div>
    <div class="button-container">
        <button onclick = "location='transaksi_sampah.php'">Riwayat Transaksi</button>
        <button onclick = "location='riwayat.php'">Riwayat Pengiriman</button>
        <button onclick = "location='jenis.php'">Jenis Sampah</button>
        <button onclick = "location='pengolahan.php'">Pengolahan Sampah</button>
    </div>
</body>
</html>
