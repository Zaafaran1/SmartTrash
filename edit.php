<?php 
include 'header.php';
include 'koneksi.php';

// Ambil data pengepul berdasarkan ID
$ID_Pengepul = $_GET['ID_Pengepul'] ?? null;

if (!$ID_Pengepul) {
    echo "ID pengepul tidak ditemukan.";
    exit;
}

$query = "SELECT * FROM pengepul WHERE id = $ID_Pengepul";
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
            <input type="text" class="form-control" name="nama" ID_Pengepul="nama" value="<?= htmlspecialchars($pengepul['nama']) ?>" placeholder="Nama">
        </div>

        <div class="mb-3">
            <label for="nomor" class="form-label">No Telepon</label>
            <input type="number" class="form-control" name="nomor" ID_Pengepul="n0_telepon" value="<?= htmlspecialchars($pengepul['no_telepon']) ?>" value="empty">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" ID_Pengepul="email" value="<?= htmlspecialchars($pengepul['email']) ?>" placeholder="Email">
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Lokasi</label>
            <input type="text" class="form-control" name="lokasi" ID_Pengepul="lokasi" value="<?= htmlspecialchars($pengepul['lokasi']) ?>" value="empty">
        </div>

        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Sampah Diterima</label>
            <input type="number" class="form-control" name="jenis" ID_Pengepul="jenis_sampah_diterima" value="<?= htmlspecialchars($pengepul['jenis_sampah_diterima']) ?>" value="empty">
        </div>

        <div class="mb-3">
            <label for="capacity" class="form-label">Kapasitas</label>
            <input type="text" class="form-control" name="kapasitas" ID_Pengepul="kapasitas" value="<?= htmlspecialchars($pengepul['kapasitas']) ?>" value="empty">
        </div>

        <div class="mb-3">
            <label for="schedule" class="form-label">Jadwal Pengambilan</label>
            <input type="date" class="form-control" name="jadwal" ID_Pengepul="jadwal_pengambilan" value="<?= htmlspecialchars($pengepul['jadwal_pengambilan']) ?>" value="empty">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status Kerjasama</label>
            <input type="number" class="form-control" name="status" ID_Pengepul="status_kerjasama" value="<?= htmlspecialchars($pengepul['status_kerjasama']) ?>" value="empty">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</section>

<?php include 'footer.php'; ?>
