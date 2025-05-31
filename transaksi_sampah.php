<?php
include("koneksi.php");
include 'header.php';

$query = 'SELECT * FROM transaksi_sampah;';
$result = mysqli_query($koneksi, $query);
?>

<section class="p-4 ml-5 mr-5 w-75">
    <div class="d-flex flex-row justify-content-between">
        <h2>Riwayat Transaksi</h2>
    </div>

    <table class="table table-dark mt-3">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Nasabah</th>
                <th>ID Pengepul</th>
                <th>Berat (Kg)</th>
                <th>Tanggal Transaksi</th>
                <th>Banyak Poin</th>
                <th>Total Harga</th>
                <th>Metode Pengiriman</th>
                <th>Status Transaksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($transaksi = mysqli_fetch_object($result)) : ?>
                <tr>
                    <td><?= $transaksi->ID_Transaksi ?></td>
                    <td><?= $transaksi->ID_Nasabah ?></td>
                    <td><?= $transaksi->ID_Pengepul ?></td>
                    <td><?= $transaksi->Berat_Kg?></td>
                    <td><?= $transaksi->Tanggal_Transaksi ?></td>
                    <td><?= $transaksi->Banyak_Poin ?></td>
                    <td>Rp <?= number_format($transaksi->Total_Harga, 0, ',', '.') ?></td>
                    <td><?= $transaksi->Metode_Pengiriman ?></td>
                    <td><?= $transaksi->Status_Transaksi ?></td>    
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

<?php include 'footer.php'; ?>
