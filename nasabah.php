<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SmartTrash Nasabah Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Roboto Mono', monospace;
    }
  </style>
  <script>
    function showSection(section) {
      document.getElementById('transaksiForm').classList.add('hidden');
      document.getElementById('penukaranForm').classList.add('hidden');
      if (section === 'transaksi') {
        document.getElementById('transaksiForm').classList.remove('hidden');
      } else if (section === 'penukaran') {
        document.getElementById('penukaranForm').classList.remove('hidden');
      }
    }

    function toggleKurirOptions() {
      const kurirRadio = document.getElementById('kurir');
      const kurirOptions = document.getElementById('kurirOptions');
      if (kurirRadio.checked) {
        kurirOptions.classList.remove('hidden');
      } else {
        kurirOptions.classList.add('hidden');
      }
    }
  </script>
</head>
<body class="bg-gradient-to-b from-cyan-100 to-cyan-300 text-black min-h-screen">
  <div class="flex min-h-screen border-4 border-black max-w-7xl mx-auto">
    <!-- Left Sidebar -->
    <div class="w-1/3 border-r-4 border-black flex flex-col items-center py-6 space-y-6 bg-cyan-50 relative">
      <!-- Top Logo and Image -->
      <div class="flex items-center space-x-2">
        <img
          src='nasabah/smarttrash.jpg'
          alt="SmartTrash logo icon"
          class="w-6 h-6"
          width="24"
          height="24"
        />
        <div class="text-xs text-cyan-700 tracking-widest font-semibold select-none" style="letter-spacing: 0.3em;">
          SmartTrash
        </div>
      </div>
      <!-- Profile Image -->
      <div class="w-28 h-28 rounded-full border-4 border-black flex items-center justify-center overflow-hidden bg-white">
        <img
          src="https://storage.googleapis.com/a1aa/image/97f8db96-5060-46da-05ed-8570754dc574.jpg"
          alt="User profile silhouette image placeholder"
          class="object-cover w-full h-full"
          width="100"
          height="100"
        />
      </div>
      <!-- Horizontal black line -->
      <div class="border-t-4 border-black w-3/4"></div>
      
      <!-- User Info -->
      <div class="text-cyan-700 text-xs text-center leading-tight select-none" style="letter-spacing: 0.1em;">
        <p class="font-semibold" id="userId">ID Nasabah: <?php echo htmlspecialchars($_POST['id_nasabah'] ?? ''); ?></p>
        <p class="font-semibold" id="userName">Nama Nasabah: <?php echo htmlspecialchars($_POST['nama'] ?? ''); ?></p>
        <p class="mt-2 font-bold text-lg text-cyan-900">
          Saldo Poin: <span id="saldoPoin">1500</span>
        </p>
      </div>
    </div>
    <!-- Right Content -->
    <div class="flex-1 p-6 bg-white">
      <!-- Top Nav -->
      <div class="flex items-center space-x-2 mb-6 select-none">
        <div
          class="text-3xl font-extrabold border-2 border-black rounded px-2 py-0.5 leading-none cursor-pointer"
          onclick="showSection('transaksi')"
          >☰</div
        >
        <div class="text-3xl font-extrabold" style="font-family: 'Comic Sans MS', cursive, sans-serif;">Home</div>
      </div>
      <!-- Dashboard Title -->
      <div class="text-sm font-bold select-none mb-4" style="letter-spacing: 0.05em;">Dasbord</div>
      <!-- Buttons for Transaksi and Penukaran -->
      <div class="flex flex-col space-y-6 max-w-md">
        <button
          class="border-2 border-black rounded-lg py-10 text-lg font-semibold select-none hover:bg-cyan-100 transition"
          onclick="showSection('transaksi')"
          type="button"
        >
          Lakukan Transaksi
        </button>
        <button
          class="border-2 border-black rounded-lg py-10 text-lg font-semibold select-none hover:bg-cyan-100 transition"
          onclick="showSection('penukaran')"
          type="button"
        >
          Penukaran Poin
        </button>
      </div>
      <!-- Transaksi Form -->
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mt-8 space-y-4 hidden max-w-lg" id="transaksiForm" method="POST">
        <h2 class="text-xl font-bold border-b-2 border-black pb-2 mb-4">Form Transaksi</h2>
        <div>
          <label for="id_nasabah" class="block font-semibold mb-1">ID Nasabah</label>
          <input
            type="text"
            id="id_nasabah"
            name="id_nasabah"
            required
            class="w-full border-2 border-black rounded px-3 py-2"
          />
        </div>
        <div>
          <label for="nama" class="block font-semibold mb-1">Nama</label>
          <input
            type="text"
            id="nama"
            name="nama"
            required
            class="w-full border-2 border-black rounded px-3 py-2"
          />
        </div>
        <div>
          <label for="alamat" class="block font-semibold mb-1">Alamat</label>
          <textarea
            id="alamat"
            name="alamat"
            rows="2"
            required
            class="w-full border-2 border-black rounded px-3 py-2"
          ></textarea>
        </div>
        <div>
          <label for="no_telepon" class="block font-semibold mb-1">No Telepon</label>
          <input
            type="tel"
            id="no_telepon"
            name="no_telepon"
            required
            class="w-full border-2 border-black rounded px-3 py-2"
          />
        </div>
        <div>
          <label for="email" class="block font-semibold mb-1">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            required
            class="w-full border-2 border-black rounded px-3 py-2"
          />
        </div>
        <div>
          <label for="jenis_sampah" class="block font-semibold mb-1">Jenis Sampah</label>
          <input
            type="text"
            id="jenis_sampah"
            name="jenis_sampah"
            required
            class="w-full border-2 border-black rounded px-3 py-2"
          />
        </div>
        <div>
          <label for="berat_sampah" class="block font-semibold mb-1">Berat Sampah (kg)</label>
          <input
            type="number"
            step="0.01"
            id="berat_sampah"
            name="berat_sampah"
            required
            class="w-full border-2 border-black rounded px-3 py-2"
          />
        </div>
        <fieldset class="border-2 border-black rounded p-3">
          <legend class="font-semibold mb-2">Pilihan Pengiriman Sampah</legend>
          <div class="flex items-center space-x-4">
            <label class="flex items-center space-x-1 cursor-pointer">
              <input
                type="radio"
                name="pengiriman"
                id="sendiri"
                value="sendiri"
                checked
                onclick="toggleKurirOptions()"
              />
              <span>Sendiri</span>
            </label>
            <label class="flex items-center space-x-1 cursor-pointer">
              <input
                type="radio"
                name="pengiriman"
                id="kurir"
                value="kurir"
                onclick="toggleKurirOptions()"
              />
              <span>Diantar Kurir</span>
            </label>
          </div>
          <div class="mt-3 hidden space-y-2" id="kurirOptions">
            <label for="metode_pembayaran" class="block font-semibold">Metode Pembayaran</label>
            <select
              name="metode_pembayaran"
              id="metode_pembayaran"
              class="w-full border-2 border-black rounded px-3 py-2"
            >
              <option value="tunai">Tunai</option>
              <option value="qris">QRIS</option>
            </select>
          </div>
        </fieldset>
        <button
          type="submit"
          class="mt-4 bg-cyan-600 text-white font-bold py-2 px-4 rounded hover:bg-cyan-700 transition"
        >
          Submit Transaksi
        </button>
      </form>
      <!-- Penukaran Poin Form -->
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mt-8 space-y-4 hidden max-w-lg" id="penukaranForm" method="POST">
        <h2 class="text-xl font-bold border-b-2 border-black pb-2 mb-4">Form Penukaran Poin</h2>
        <div>
          <label for="id_nasabah_p" class="block font-semibold mb-1">ID Nasabah</label>
          <input
            type="text"
            id="id_nasabah_p"
            name="id_nasabah_p"
            required
            class="w-full border-2 border-black rounded px-3 py-2"
          />
        </div>
        <div>
          <label for="id_penukaran" class="block font-semibold mb-1">ID Penukaran</label>
          <input
            type="text"
            id="id_penukaran"
            name="id_penukaran"
            readonly
            value="<?php echo 'PNK-' . uniqid(); ?>"
            class="w-full border-2 border-black rounded px-3 py-2 bg-gray-100"
          />
        </div>
        <div>
          <label for="tanggal_penukaran" class="block font-semibold mb-1">Tanggal Penukaran</label>
          <input
            type="date"
            id="tanggal_penukaran"
            name="tanggal_penukaran"
            required
            class="w-full border-2 border-black rounded px-3 py-2"
          />
        </div>
        <div>
          <label for="metode_pengiriman" class="block font-semibold mb-1">Metode Pengiriman (Bank Apa)</label>
          <input
            type="text"
            id="metode_pengiriman"
            name="metode_pengiriman"
            required
            class="w-full border-2 border-black rounded px-3 py-2"
          />
        </div>
        <div>
          <label for="status_penukaran" class="block font-semibold mb-1">Status Penukaran</label>
          <select
            id="status_penukaran"
            name="status_penukaran"
            required
            class="w-full border-2 border-black rounded px-3 py-2"
          >
            <option value="pending">Pending</option>
            <option value="diproses">Diproses</option>
            <option value="selesai">Selesai</option>
          </select>
        </div>
        <button
          type="submit"
          class="mt-4 bg-cyan-600 text-white font-bold py-2 px-4 rounded hover:bg-cyan-700 transition"
        >
          Submit Penukaran
        </button>
      </form>
    </div>
  </div>
</body>
</html>