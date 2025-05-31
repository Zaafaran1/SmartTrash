<?php
include("koneksi.php");
include 'header.php';

$query = 'SELECT * FROM pengolahan_sampah;';
$result = mysqli_query($koneksi, $query);
?>

<section class="p-4 ml-5 mr-5 w-75">
    <div class="d-flex flex-row justify-content-between">
        <h2>Pengolahan Sampah</h2>
    </div>

    <table class="table table-dark mt-3">
        <thead>
            <tr>
                <th>ID Pengolahan</th>
                <th>Tanggal Pengolahan</th>
                <th>Metode Pengolahan</th>
                <th>Hasil Pengolahan</th>
                <th>Berat Diolah</th>
                <th>Dampak Lingkungan</th>
                <th>Lokasi Pengolahan</th>
                <th>Operator Pengolahan</th>
                <th>Catatan</th>
                <th>ID Jenis Sampah</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($pengolahan_sampah = mysqli_fetch_object($result)) : ?>
                <tr>
                    <td><?= $pengolahan_sampah->ID_Pengolahan ?></td>
                    <td><?= $pengolahan_sampah->Tanggal_Pengolahan ?></td>
                    <td><?= $pengolahan_sampah->Metode_Pengolahan ?></td>
                    <td><?= $pengolahan_sampah->Hasil_Pengolahan ?></td>
                    <td><?= $pengolahan_sampah->Berat_Diolah ?></td>
                    <td><?= $pengolahan_sampah->Dampak_Lingkungan ?></td>
                    <td><?= $pengolahan_sampah->Lokasi_Pengolahan ?></td>
                    <td><?= $pengolahan_sampah->Operator_Pengolahan ?></td>
                    <td><?= $pengolahan_sampah->Catatan ?></td>
                    <td><?= $pengolahan_sampah->ID_Jenis_Sampah ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

<?php include 'footer.php'; ?>