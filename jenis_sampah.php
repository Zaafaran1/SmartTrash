<?php
include("koneksi.php");
include 'header.php';

$query = 'SELECT * FROM jenis_sampah;';
$result = mysqli_query($koneksi, $query);
?>

<section class="p-4 ml-5 mr-5 w-75">
    <div class="d-flex flex-row justify-content-between">
        <h2>Jenis Sampah</h2>
    </div>

    <table class="table table-dark mt-3">
        <thead>
            <tr>
                <th>ID Jenis Sampah</th>
                <th>Nama Sampah</th>
                <th>Kategori</th>
                <th>Harga (Kg)</th>
                <th>Deskripsi</th>
                <th>Potensi Daur Ulang</th>
                <th>Satuan Pengukuran</th>
                <th>Warna Sampah</th>
                <th>Metode Pengolahan</th>
                <th>Dampak Lingkungan</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($jenis_sampah = mysqli_fetch_object($result)) : ?>
                <tr>
                    <td><?= $jenis_sampah->ID_Jenis_Sampah ?></td>
                    <td><?= $jenis_sampah->Nama_sampah ?></td>
                    <td><?= $jenis_sampah->Kategori ?></td>
                    <td><?= $jenis_sampah->Harga_Kg ?></td>
                    <td><?= $jenis_sampah->Deskripsi ?></td>
                    <td><?= $jenis_sampah->Potensi_Daur_Ulang ?></td>
                    <td><?= $jenis_sampah->Satuan_Pengukuran ?></td>
                    <td><?= $jenis_sampah->Warna_Sampah ?></td>   
                    <td><?= $jenis_sampah->Metode_Pengolahan ?></td> 
                    <td><?= $jenis_sampah->Dampak_Lingkungan ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

<?php include 'footer.php'; ?>