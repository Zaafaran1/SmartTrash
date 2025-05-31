<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Pengelola </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body class="bg-[#e6f9fc] min-h-screen flex">
    <!-- Sidebar -->
    <nav class="bg-white w-64 min-h-screen border-r border-black p-6 font-mono">
        <h1 class="font-bold text-xl mb-6 border-b border-black pb-2">Dashboard Pengelola</h1>
        <ul class="space-y-4 text-sm font-semibold">
            <li><button class="w-full text-left text-[#1d8ca3] font-bold" onclick="showSection('laporanKeuangan')">Laporan Keuangan</button></li>
            <li><button class="w-full text-left hover:text-[#1d8ca3]" onclick="showSection('dataPengepul')">Data Pengepul</button></li>
            <li><button class="w-full text-left hover:text-[#1d8ca3]" onclick="showSection('pertukaran')">Pertukaran</button></li>
            <li><button class="w-full text-left hover:text-[#1d8ca3]" onclick="showSection('riwayatPengiriman')">Riwayat Pengiriman</button></li>
            <li><button class="w-full text-left hover:text-[#1d8ca3]" onclick="showSection('jenisSampah')">Jenis Sampah</button></li>
            <li><button class="w-full text-left hover:text-[#1d8ca3]" onclick="showSection('pengolahanSampah')">Pengolahan Sampah</button></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-6 font-mono bg-white min-h-screen overflow-auto max-w-4xl mx-auto">
        <!-- Laporan Keuangan Section -->
        <section id="laporanKeuangan" class="hidden">
            <h2 class="font-bold text-lg mb-4 border-b border-black pb-2">Form Input Laporan Keuangan</h2>
            <form class="space-y-4 mb-8" action="your_action_url_here" method="POST" autocomplete="off">
                <div>
                    <label for="id_laporan" class="block font-semibold mb-1">ID Laporan Keuangan</label>
                    <input type="text" id="id_laporan" name="id_laporan" required class="border border-black rounded px-3 py-2 w-full" />
                </div>
                <div>
                    <label for="disusun_oleh" class="block font-semibold mb-1">Disusun Oleh</label>
                    <input type="text" id="disusun_oleh" name="disusun_oleh" required class="border border-black rounded px-3 py-2 w-full" />
                </div>
                <div>
                    <label for="tanggal_pembuatan" class="block font-semibold mb-1">Tanggal Pembuatan Laporan</label>
                    <input type="date" id="tanggal_pembuatan" name="tanggal_pembuatan" required class="border border-black rounded px-3 py-2 w-full" />
                </div>
                <div>
                    <label for="sumber_pendapatan" class="block font-semibold mb-1">Sumber Pendapatan</label>
                    <input type="text" id="sumber_pendapatan" name="sumber_pendapatan" required class="border border-black rounded px-3 py-2 w-full" />
                </div>
                <div>
                    <label for="pendapatan_total" class="block font-semibold mb-1">Pendapatan Total</label>
                    <input type="number" id="pendapatan_total" name="pendapatan_total" required min="0" step="0.01" class="border border-black rounded px-3 py-2 w-full" />
                </div>
                <div>
                    <label for="saldo_akhir" class="block font-semibold mb-1">Saldo Akhir</label>
                    <input type="number" id="saldo_akhir" name="saldo_akhir" required min="0" step="0.01" class="border border-black rounded px-3 py-2 w-full" />
                </div>
                <button type="submit" class="bg-[#1d8ca3] text-white font-semibold px-4 py-2 rounded">Submit Laporan</button>
            </form>
        </section>
        <section id="dataPengepul" class="hidden">Data Pengepul Section</section>
        <section id="pertukaran" class="hidden">Pertukaran Section</section>
        <section id="riwayatPengiriman" class="hidden">Riwayat Pengiriman Section</section>
        <section id="jenisSampah" class="hidden">Jenis Sampah Section</section>
        <section id="pengolahanSampah" class="hidden">Pengolahan Sampah Section</section>
    </main>

    <script>
        function showSection(sectionId) {
            // Hide all sections
            const sections = document.querySelectorAll('main > section');
            sections.forEach(section => section.classList.add('hidden'));

            // Show the selected section
            document.getElementById(sectionId).classList.remove('hidden');
        }
    </script>
</body>
</html>