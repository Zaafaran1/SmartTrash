<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Pengelola</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 100px;
        }

        .button-container button {
            background-color: rgb(135, 206, 255);
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-[#e6f9fc] min-h-screen flex font-mono">

    <!-- Sidebar -->
    <nav class="bg-white w-64 min-h-screen border-r border-black p-6">
        <h1 class="text-[#1d8ca3] font-bold text-xl mb-6 border-b border-black pb-2">Dashboard Pengelola</h1>
        <ul class="space-y-4 text-sm font-semibold">
            <li><button class="w-full text-left hover:text-[#1d8ca3]" onclick="showSection('nasabah')">Data Nasabah</button></li>
            <li><button class="w-full text-left hover:text-[#1d8ca3]" onclick="showSection('laporanKeuangan')">Laporan Keuangan</button></li>
            <li><button class="w-full text-left hover:text-[#1d8ca3]" onclick="showSection('pengepul')">Data Pengepul</button></li>
            <li><button class="w-full text-left hover:text-[#1d8ca3]" onclick="showSection('pertukaran')">Pertukaran</button></li>
            <li><button class="w-full text-left hover:text-[#1d8ca3]" onclick="showSection('transaksi')">Riwayat Transaksi</button></li>
            <li><button class="w-full text-left hover:text-[#1d8ca3]" onclick="showSection('riwayatPengiriman')">Riwayat Pengiriman</button></li>
            <li><button class="w-full text-left hover:text-[#1d8ca3]" onclick="showSection('jenisSampah')">Jenis Sampah</button></li>
            <li><button class="w-full text-left hover:text-[#1d8ca3]" onclick="showSection('pengolahanSampah')">Pengolahan Sampah</button></li>   
            <div class="button-container">
                <button> <a href="peran.php"><-Back</a> </button>
            </div>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-6 bg-white overflow-auto max-w-4xl mx-auto">

        <!-- Placeholder untuk Nasabah -->
        <section id="nasabah" class="hidden">
            <h2 class="font-bold text-lg mb-4 border-b border-black pb-2">Data Nasabah</h2>
            <div class="button-container">
                <button onclick="location='password2.php'">Lihat Data Nasabah</button>
            </div>
        </section>

        <!-- Laporan Keuangan -->
        <section id="laporanKeuangan" class="hidden">
            <h2 class="font-bold text-lg mb-4 border-b border-black pb-2">Laporan Keuangan Section</h2>
            <div class="button-container">
                <button onclick="location='laporan_keuangan.php'">Lihat Laporan Keuangan</button>
            </div>
        </section>

        <!-- Data Pengepul -->
        <section id="pengepul" class="hidden">
            <h2 class="font-bold text-lg mb-4 border-b border-black pb-2">Data Pengepul Section</h2>
            <div class="button-container">
                <button onclick="location='password.php'">Lihat Data Pengepul</button>
            </div>
        </section>

        <!-- Pertukaran -->
        <section id="pertukaran" class="hidden">
            <h2 class="font-bold text-lg mb-4 border-b border-black pb-2">Pertukaran Poin Section</h2>
            <div class="button-container">
                <button onclick="location='nasabah.php'">Pertukaran Poin</button>
            </div>
        </section>

        <!-- Riwayat Transaksi -->
        <section id="transaksi" class="hidden">
            <h2 class="font-bold text-lg mb-4 border-b border-black pb-2">Riwayat Transaksi Section</h2>
            <div class="button-container">
                <button onclick="location='transaksi_sampah.php'">Lihat Riwayat Transaksi</button>
            </div>
        </section>

        <!-- Riwayat Pengiriman -->
        <section id="riwayatPengiriman" class="hidden">
            <h2 class="font-bold text-lg mb-4 border-b border-black pb-2">Pengiriman Sampah Ke Pengepul Section</h2>
            <div class="button-container">
                <button onclick="location='pengiriman_sampah_ke_pengepul.php'">Lihat Data Pengiriman</button>
            </div>
        </section>

        <!-- Jenis Sampah -->
        <section id="jenisSampah" class="hidden">
            <h2 class="font-bold text-lg mb-4 border-b border-black pb-2">Jenis Sampah Section</h2>
            <div class="button-container">
                <button onclick="location='jenis_sampah.php'">Lihat Deskripsi Sampah</button>
            </div>
        </section>

        <!-- Pengolahan Sampah -->
        <section id="pengolahanSampah" class="hidden">
            <h2 class="font-bold text-lg mb-4 border-b border-black pb-2">Pengolahan Sampah Section</h2>
            <div class="button-container">
                <button onclick="location='pengolahan_sampah.php'">Lihat Pengolahan Sampah</button>
            </div>  
        </section>
    </main>
    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('main > section');
            sections.forEach(section => section.classList.add('hidden'));
            const selectedSection = document.getElementById(sectionId);
            if (selectedSection) {
                selectedSection.classList.remove('hidden');
            }
        }
    </script>
</body>
</html>
