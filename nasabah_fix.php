<?php
include("koneksi.php");
include 'header.php';

$query = 'SELECT * FROM nasabah;';
$result = mysqli_query($koneksi, $query);
?>

<section class="p-4 ml-5 mr-5 w-75">
    <div class="d-flex flex-row justify-content-between">
        <h2>Data Nasabah</h2>
    </div>

    <table class="table table-dark mt-3">
        <thead>
            <tr>
                <th>ID Nasabah</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Tanggal Bergabung</th>
                <th>Saldo Poin</th>
                <th>Jumlah Transaksi</th>
                <th>Status Keanggotaan</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($nasabah = mysqli_fetch_object($result)) : ?>
                <tr>
                    <td><?= $nasabah->ID_Nasabah ?></td>
                    <td><?= $nasabah->Nama ?></td>
                    <td><?= $nasabah->Alamat ?></td>
                    <td><?= $nasabah->No_Telepon ?></td>
                    <td><?= $nasabah->Email?></td>
                    <td><?= $nasabah->Tanggal_Bergabung ?></td>
                    <td><?= $nasabah->Saldo_Poin ?></td>
                    <td><?= $nasabah->Jumlah_Transaksi ?></td>
                    <td><?= $nasabah->Status_Keanggotaan ?></td>    
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

<?php include 'footer.php'; ?>
