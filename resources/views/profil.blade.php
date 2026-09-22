<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Sekolah - SMK Negeri 1 Cijati</title>
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
  <main class="flex-grow max-w-7xl mx-auto px-6 py-12 w-full space-y-12">
    
    <!-- JUDUL HALAMAN -->
    <div class="text-center md:text-left">
      <h1 class="text-3xl md:text-4xl font-extrabold text-blue-600 mb-2">
        Profil Sekolah
      </h1>
      <p class="text-gray-600">
        Mengenal lebih dekat SMK Negeri 1 Cijati, sejarah singkat, visi, misi, dan pimpinan sekolah.
      </p>
    </div>

    <!-- SEKSI FOTO UTAMA & TENTANG SEKOLAH -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden grid grid-cols-1 lg:grid-cols-2 gap-0">
    
        </p>
        <p class="text-gray-600 text-sm leading-relaxed">
      </div>
    </div>

    <!-- Sambutan Kepala Sekolah -->
<section class="max-w-7xl mx-auto px-6 py-12">
    <div class="flex flex-col md:flex-row items-center gap-8 bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
        
        <!-- Foto Kepala Sekolah -->
        <div class="w-full md:w-1/3 flex justify-center">
           <img src="{{ asset('images/kepala-sekolah.jpg.jpg') }}" 
     alt="Kepala Sekolah" 
     class="w-64 h-80 object-cover rounded-2xl shadow-md border-2 border-blue-500">
      </div>
      <div class="space-y-3 text-center md:text-left">
        <span class="text-xs text-blue-600 font-bold uppercase tracking-wider">Sambutan Kepala Sekolah</span>
        <h3 class="text-xl font-bold text-gray-900">Sambutan Pimpinan Sekolah</h3>
        <p class="text-gray-600 text-sm leading-relaxed italic">
          "Selamat datang di SMK Negeri 1 Cijati. Kami terus berinovasi untuk menyelaraskan kurikulum dengan kebutuhan dunia industri, demi melahirkan generasi muda yang kompeten dan berintegritas."
        </p>
        <div>
          <h4 class="font-bold text-gray-900 text-base">A. Rahmat Dimyati, S.Pd., M.Pd.',</h4>
          <p class="text-xs text-gray-500">Kepala SMK Negeri 1 Cijati</p>
        </div>
      </div>
    </div>

    <!-- SEKSI VISI & MISI -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- VISI -->
      <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center font-bold text-xl mb-4">
          V
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3">Visi Sekolah</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          "Mewujudkan generasi cerdas, berkarakter, unggul dalam teknologi, bermartabat, dan berakhlaq mulia pada tahun 2030."
        </p>
      </div>

      <!-- MISI -->
      <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center font-bold text-xl mb-4">
          M
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3">Misi Sekolah</h3>
        <ul class="text-gray-600 text-sm space-y-2 list-disc list-inside">
          <li>Menyelenggarakan pembelajaran berbasis teknologi dan industri.</li>
          <li>Meningkatkan kedisiplinan dan pembentukan karakter islami.</li>
          <li>Menjalin kerja sama erat dengan Dunia Usaha & Dunia Industri (DUDI).</li>
          <li>Mengembangkan potensi bakat siswa di bidang akademik dan non-akademik.</li>
        </ul>
      </div>
    </div>

  </main>

  <!-- FOOTER -->
  <footer class="bg-gray-900 text-gray-400 py-6 text-center text-sm border-t border-gray-800">
    <p>&copy; 2026 SMK Negeri 1 Cijati. All rights reserved.</p>
  </footer>

</body>
</html>