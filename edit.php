<?php 
include 'header.php';
include 'koneksi.php';

// Ambil data pengepul berdasarkan ID
$ID_Pengepul = $_GET['ID_Pengepul'] ?? null;

if (!$ID_Pengepul) {
    echo "ID pengepul tidak ditemukan.";
    exit;
}

$query = "SELECT * FROM pengepul WHERE ID_Pengepul = $ID_Pengepul";
$result = mysqli_query($koneksi, $query);
$pengepul = mysqli_fetch_assoc($result);

if (!$pengepul) {
    echo "pengepul tidak ditemukan.";
    exit;
}
?>

<section class="p-4 ml-5 mr-5 w-50">
    <form action="function.php" method="POST">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="<?= $pengepul['ID_Pengepul'] ?>">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama pengepul</label>
            <input type="text" class="form-control" name="nama" id = "nama">
        </div>

        <div class="mb-3">
            <label for="nomor" class="form-label">No Telepon</label>
            <input type="tel" class="form-control" name="nomor" id = "no_telepon">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id = "email">
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Lokasi</label>
            <input type="text" class="form-control" name="lokasi" id = "lokasi">
        </div>

        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Sampah Diterima</label>
            <input type="text" class="form-control" name="jenis" id = "jenis_sampah_diterima">
        </div>

        <div class="mb-3">
            <label for="capacity" class="form-label">Kapasitas</label>
            <input type="number" class="form-control" name="kapasitas" id = "kapasitas">
        </div>

        <div class="mb-3">
            <label for="schedule" class="form-label">Tanggal Penerimaan</label>
            <input type="date" class="form-control" name="tanggal" id = "tanggal_penerimaan">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status Kerjasama</label>
            <input type="text" class="form-control" name="status" id = "status_kerjasama">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</section>

<?php include 'footer.php'; ?>
