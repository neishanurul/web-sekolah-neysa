<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ekstrakurikuler - SMK Negeri 1 Cijati</title>
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
        Ekstrakurikuler
      </h1>
      <p class="text-gray-600">
        Wadah pengembangan minat, bakat, dan karakter siswa SMK Negeri 1 Cijati.
      </p>
    </div>

    <!-- GRID KARTU EKSKUL -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- 1. PRAMUKA -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
        <img src="{{ asset('images/logo-pramuka.jpg') }}" alt="Pramuka">
        <div class="p-6">
          <h3 class="font-bold text-xl text-gray-900 mb-2">Pramuka</h3>
          <p class="text-gray-600 text-sm">Membentuk kedisiplinan, kepemimpinan, dan kemandirian anggota melalui kegiatan kepanduan.</p>
        </div>
      </div>

      <!-- 2. PASKIBRA -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
        <img src="{{ asset('images/logo-paskibra.png') }}" alt="Paskibra">
        <div class="p-6">
          <h3 class="font-bold text-xl text-gray-900 mb-2">Paskibra</h3>
          <p class="text-gray-600 text-sm">Melatih kebaris-berawasan, jiwa nasionalisme, serta keteguhan mental dalam pengibaran bendera.</p>
        </div>
      </div>

      <!-- 3. FUTSAL -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
        <img src="{{ asset('images/logo-futsal.png') }}" alt="Futsal">
        <div class="p-6">
          <h3 class="font-bold text-xl text-gray-900 mb-2">Futsal</h3>
          <p class="text-gray-600 text-sm">Mengasah keterampilan olah bola, kebugaran fisik, dan kerja sama tim dalam olahraga futsal.</p>
        </div>
      </div>

      <!-- 4. PMR -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
        <img src="images/logo-pmr.jpg" alt="PMR" class="max-h-full max-w-full object-contain">
        <div class="p-6">
          <h3 class="font-bold text-xl text-gray-900 mb-2">PMR</h3>
          <p class="text-gray-600 text-sm">Mengembangkan kepedulian sosial dan keterampilan pertolongan pertama pada kesehatan.</p>
        </div>
      </div>

      <!-- 5. Rohis Nur Azkia -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
    <img src="images/logo-rohis.jpg" alt="Rohis Nur Azkia" class="max-h-full max-w-full object-contain">
    <div class="p-6">
        <h3 class="font-bold text-xl text-gray-900 mb-2">Rohis Nur Azkia</h3>
        <p class="text-gray-600 text-sm">Wadah pembinaan kerohanian Islam untuk memperdalam ilmu agama, mempererat ukhuwah islamiyah, dan membentuk karakter siswa yang berakhlakul karimah.</p>
    </div>
</div>

      <!-- 6. MARCHING BAND -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
        <img src="images/logo-marchingband.jpg" alt="Marching Band" class="max-h-full max-w-full object-contain">
        <div class="p-6">
          <h3 class="font-bold text-xl text-gray-900 mb-2">Marching Band</h3>
          <p class="text-gray-600 text-sm">Memadukan harmonisasi alat musik tiup dan perpusif dengan formasi barisan yang megah.</p>
        </div>
      </div>

      <!-- 7. KARAWITAN -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
        <img src="images/logo-karawitan.jpg" alt="Karawitan" class="max-h-full max-w-full object-contain">
        <div class="p-6">
          <h3 class="font-bold text-xl text-gray-900 mb-2">Karawitan</h3>
          <p class="text-gray-600 text-sm">Lestarikan seni gamelan dan musik tradisional Sunda/Jawa untuk memperkaya budaya lokal.</p>
        </div>
      </div>

      <!-- 8. BOLA VOLI -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
        <img src="images/logo-volly.png" alt="Bola Voli" class="max-h-full max-w-full object-contain">
        <div class="p-6">
          <h3 class="font-bold text-xl text-gray-900 mb-2">Bola Voli</h3>
          <p class="text-gray-600 text-sm">Melatih ketangkasan, melompat, teknik *servis* & *smash* dalam pertandingan bola voli.</p>
        </div>
      </div>

      <!-- 9. CINEMAK -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
        <img src="images/logo-cinemak.jpg" alt="Cinemak (Sinematografi)" class="max-h-full max-w-full object-contain">
        <div class="p-6">
          <h3 class="font-bold text-xl text-gray-900 mb-2">Cinemak (Sinematografi)</h3>
          <p class="text-gray-600 text-sm">Wadah kreasi siswa dalam videografi, fotografi, pembuatan film pendek, serta *content creation*.</p>
        </div>
      </div>

      <!-- 10. CLUB JEPANG -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition">
  <div class="w-full h-64 bg-slate-50 flex items-center justify-center p-2">
   <img src="images/logo-jepang.jpg" alt="Japanese Club" class="w-full h-full object-cover">
  </div>
  <div class="p-6">
    <h3 class="font-bold text-xl text-gray-900 mb-2">Japanese Club (Nihon Club)</h3>
    <p class="text-gray-600 text-sm">Wadah pembelajaran bahasa, kebudayaan Jepang, seni anime/manga, serta persiapan kegiatan *cosplay* dan kebudayaan.</p>
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