<?php include 'header.php' ?>

<section class="p-4 ml-5 mr-5 w-50">
    <form action="function.php" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pengepul</label>
            <input type="text" class="form-control" name="nama" ID_Pengepul="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">No Telepon</label>
            <input type="tel" class="form-control" name="nomor" ID_Pengepul="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" ID_Pengepul="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
            <input type="text" class="form-control" name="lokasi" ID_Pengepul="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Jenis Sampah Diterima</label>
            <input type="text" class="form-control" name="jenis" ID_Pengepul="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Kapasitas (Kg)</label>
            <input type="number" class="form-control" name="kapasitas" ID_Pengepul="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jadwal Pengambilan</label>
            <input type="date-month" class="form-control" name="jadwal" ID_Pengepul="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Status Kerja sama</label>
            <input type="text" class="form-control" name="status" ID_Pengepul="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</section>

<?php include 'footer.php' ?>