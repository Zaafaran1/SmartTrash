<?php
include("koneksi.php");
include 'header.php';

$query = 'SELECT * FROM pengiriman_sampah_ke_pengepul;';
$result = mysqli_query($koneksi, $query);
?>

<section class="p-4 ml-5 mr-5 w-75">
    <div class="d-flex flex-row justify-content-between">
        <h2>Data Pengiriman Sampah ke Pengepul</h2>
    </div>

    <table class="table table-dark mt-3">
        <thead>
            <tr>
                <th>ID Pengiriman</th>
                <th>ID Pengepul</th>
                <th>ID Transaksi</th>
                <th>Tanggal Kirim</th>
                <th>Total Berat</th>
                <th>Status Pengiriman</th>
                <th>Nama Kurir</th>
                <th>No Telepon Kurir</th>
                <th>Biaya Pengiriman</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($pengiriman_sampah_ke_pengepul = mysqli_fetch_object($result)) : ?>
                <tr>
                    <td><?= $pengiriman_sampah_ke_pengepul->ID_Pengiriman ?></td>
                    <td><?= $pengiriman_sampah_ke_pengepul->ID_Pengepul ?></td>
                    <td><?= $pengiriman_sampah_ke_pengepul->ID_Transaksi ?></td>
                    <td><?= $pengiriman_sampah_ke_pengepul->Tanggal_Kirim ?></td>
                    <td><?= $pengiriman_sampah_ke_pengepul->Total_Berat ?></td>
                    <td><?= $pengiriman_sampah_ke_pengepul->Status_Pengiriman ?></td>
                    <td><?= $pengiriman_sampah_ke_pengepul->Nama_Kurir ?></td>
                    <td><?= $pengiriman_sampah_ke_pengepul->No_Telepon_Kurir ?></td>
                    <td><?= $pengiriman_sampah_ke_pengepul->Biaya_Pengiriman ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

<?php include 'footer.php'; ?>