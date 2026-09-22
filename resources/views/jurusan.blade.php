<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jurusan Sekolah - SMK Negeri 1 Cijati</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

  <!-- NAVBAR / HEADER -->
  <header class="bg-[#2563eb] text-white shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">
      <a href="{{ route('home') }}" class="text-2xl font-extrabold tracking-wider">
        SMK NEGERI 1 CIJATI
      </a>
      <a href="{{ route('home') }}" class="text-sm font-semibold bg-white/10 hover:bg-white/20 px-4 py-2 rounded-lg transition">
        ← Kembali ke Beranda
      </a>
    </div>
  </header>

  <!-- MAIN CONTENT -->
  <main class="flex-grow max-w-7xl mx-auto px-6 py-12 w-full">
    
    <!-- JUDUL HALAMAN -->
    <div class="mb-10 text-center md:text-left">
      <h1 class="text-3xl md:text-4xl font-extrabold text-blue-600 mb-2">
        Daftar Jurusan
      </h1>
      <p class="text-gray-600">
        Program Keahlian Unggulan di SMK Negeri 1 Cijati untuk Mempersiapkan Tenaga Kerja Profesional.
      </p>
    </div>

    <!-- GRID KARTU JURUSAN -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

      <!-- 1. REKAYASA PERANGKAT LUNAK (RPL) -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
        <img src="/images/logo-rpl.png" alt="RPL">
        <div class="p-6">
          <span class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full mb-3">RPL</span>
          <h2 class="font-bold text-2xl text-gray-900 mb-3">Rekayasa Perangkat Lunak</h2>
          <p class="text-gray-600 text-sm leading-relaxed">
            Mempelajari pemrograman komputer, pembuatan aplikasi mobile, pengembangan website, pengelolaan basis data, dan logika rekayasa perangkat lunak modern.
          </p>
        </div>
      </div>

      <!-- 2. BISNIS DARING DAN PEMASARAN (BDP) -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
        <img src="/images/logo-pemasaran.png" alt="BDP">
        <div class="p-6">
          <span class="inline-block bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full mb-3">BDP</span>
          <h2 class="font-bold text-2xl text-gray-900 mb-3">Bisnis Daring dan Pemasaran</h2>
          <p class="text-gray-600 text-sm leading-relaxed">
            Mempelajari strategi pemasaran digital, bisnis e-commerce, pengelolaan toko online, komunikasi bisnis, serta teknik penjualan modern.
          </p>
        </div>
      </div>

      <!-- 3. AGRIBISNIS PENGOLAHAN HASIL PERTANIAN (APHP) -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
        <img src="/images/logo-aphp.png" alt="APHP">
        <div class="p-6">
          <span class="inline-block bg-amber-100 text-amber-800 text-xs font-semibold px-3 py-1 rounded-full mb-3">APHP</span>
          <h2 class="font-bold text-2xl text-gray-900 mb-3">Agribisnis Pengolahan Hasil Pertanian</h2>
          <p class="text-gray-600 text-sm leading-relaxed">
            Mempelajari teknik pengolahan bahan pangan nabati dan hewani, keamanan pangan, pengemasan produk, serta kewirausahaan hasil pertanian.
          </p>
        </div>
      </div>

      <!-- 4. TEKNIK KENDARAAN RINGAN OTOMOTIF (TKRO) -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
        <img src="/images/logo-tkro.png" alt="TKRO">
        <div class="p-6">
          <span class="inline-block bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full mb-3">TKRO</span>
          <h2 class="font-bold text-2xl text-gray-900 mb-3">Teknik Kendaraan Ringan Otomotif</h2>
          <p class="text-gray-600 text-sm leading-relaxed">
            Mempelajari perawatan dan perbaikan mesin mobil, sistem kelistrikan otomotif, chasis, pemindahan tenaga, serta diagnosa gangguan mesin kendaraan.
          </p>
        </div>
      </div>

    </div>

  </main>

  <!-- FOOTER -->
  <footer class="bg-gray-900 text-gray-400 py-6 text-center text-sm border-t border-gray-800">
    <p>&copy; 2026 SMK Negeri 1 Cijati. All rights reserved.</p>
  </footer>

</body>
</html>