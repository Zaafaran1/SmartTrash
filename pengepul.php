<?php
include("koneksi.php");

$query = 'SELECT * FROM pengepul;';
$result = mysqli_query($koneksi, $query);

include 'header.php';
?>
<section class="p-4 ml-5 mr-5 w-75">
    <div class="d-flex flex-row justify-content-between">
        <h2>Perusahaan Pengepul</h2>
        <a href="tabel_pengepul.php" class="btn btn-primary p-2">+Tambah</a>
    </div>
    <table class="table table-dark mt-3">
        <thead>
            <tr>
                <th scope="col">ID Pengepul</th>
                <th scope="col">Nama Pengepul</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Email</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Jenis Sampah Diterima</th>
                <th scope="col">Kapasitas</th>
                <th scope="col">Tanggal Penerimaan</th>
                <th scope="col">Status Kerjasama</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($pengepul = mysqli_fetch_object($result)) { ?>
                <tr>
                    <td><?= $pengepul->ID_Pengepul ?></td>
                    <td><?= $pengepul->Nama_Pengepul ?></td>
                    <td><?= $pengepul->No_Telepon ?></td>
                    <td><?= $pengepul->Email ?></td>
                    <td><?= $pengepul->Lokasi ?></td>
                    <td><?= $pengepul->Jenis_Sampah_Diterima ?></td>
                    <td><?= $pengepul->Kapasitas ?></td>
                    <td><?= $pengepul->Tanggal_Penerimaan ?></td>
                    <td><?= $pengepul->Status_Kerjasama ?></td>
                    <td>
                        <a href="edit.php?ID_Pengepul=<?= $pengepul->ID_Pengepul ?>" class="btn btn-success btn-sm">Edit</a>
                        <a href="function.php?action=delete&ID_Pengepul=<?= $pengepul->ID_Pengepul ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<a href="peran.php" class="btn btn-primary p-2"><-Back</a>
</section>

<?php include 'footer.php'; ?>
