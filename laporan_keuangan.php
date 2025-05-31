<?php
include("koneksi.php");
include 'header.php';

$query = 'SELECT * FROM laporan_keuangan;';
$result = mysqli_query($koneksi, $query);
?>

<section class="p-4 ml-5 mr-5 w-75">
    <div class="d-flex flex-row justify-content-between">
        <h2>Laporan Keuangan</h2>
    </div>

    <table class="table table-dark mt-3">
        <thead>
            <tr>
                <th>ID Laporan Keuangan</th>
                <th>Periode</th>
                <th>Pendapatan Total</th>
                <th>Pengeluaran Total</th>
                <th>Laba Bersih</th>
                <th>Sumber Pendapatan</th>
                <th>Kategori Pengeluaran</th>
                <th>Saldo Akhir</th>
                <th>Tanggal Pembuatan</th>
                <th>Disusun Oleh</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($laporan_keuangan = mysqli_fetch_object($result)) : ?>
                <tr>
                    <td><?= $laporan_keuangan->ID_Laporan_Keuangan ?></td>
                    <td><?= $laporan_keuangan->Periode ?></td>
                    <td><?= $laporan_keuangan->Pendapatan_Total ?></td>
                    <td><?= $laporan_keuangan->Pengeluaran_Total ?></td>
                    <td><?= $laporan_keuangan->Laba_Bersih ?></td>
                    <td><?= $laporan_keuangan->Sumber_Pendapatan ?></td>
                    <td><?= $laporan_keuangan->Kategori_Pengeluaran ?></td>
                    <td><?= $laporan_keuangan->Saldo_Akhir ?></td>
                    <td><?= $laporan_keuangan->Tanggal_Pembuatan ?></td>
                    <td><?= $laporan_keuangan->Disusun_Oleh ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

<?php include 'footer.php'; ?>