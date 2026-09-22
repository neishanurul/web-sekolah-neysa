<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - SMK Negeri 1 Cijati</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans text-gray-800 min-h-screen flex flex-col justify-between">

    <!-- Header / Navigation -->
    <header class="bg-blue-600 text-white py-4 px-6 md:px-12 flex items-center justify-between shadow-md">
        <h1 class="text-xl md:text-2xl font-extrabold tracking-wide uppercase">
            SMK NEGERI 1 CIJATI
        </h1>
        <nav class="hidden md:flex items-center space-x-6 text-sm font-semibold">
            <a href="{{ route('home') }}" class="hover:text-blue-200 transition">Beranda</a>
            <a href="{{ route('profil') }}" class="hover:text-blue-200 transition">Profil</a>
            <a href="{{ route('jurusan') }}" class="hover:text-blue-200 transition">Jurusan</a>
            <a href="{{ route('guru') }}" class="hover:text-blue-200 transition">Guru</a>
            <a href="{{ route('ekskul') }}" class="hover:text-blue-200 transition">Ekskul</a>
            <a href="{{ route('galeri') }}" class="hover:text-blue-200 transition font-bold underline">Galeri</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-6 py-12 flex-1 w-full">
        <div class="mb-8">
            <h2 class="text-3xl font-extrabold text-blue-900 mb-2">Galeri Kegiatan Sekolah</h2>
            <p class="text-gray-600">Dokumentasi berbagai aktivitas dan kegiatan di SMK Negeri 1 Cijati.</p>
        </div>

        <!-- Grid Galeri -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Card 1: Upacara -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="h-80 bg-gray-100 overflow-hidden">
                    <img src="{{ asset('images/upacara.jpg') }}" alt="Kegiatan Upacara" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Kegiatan Upacara</h3>
                    <p class="text-gray-600 text-sm">Upacara bendera rutin dan pembiasaan kedisiplinan seluruh siswa SMK Negeri 1 Cijati.</p>
                </div>
            </div>

            <!-- Card 2: Senam / Kegiatan Bersama -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="h-80 bg-gray-100 overflow-hidden">
                    <img src="{{ asset('images/senam.jpg') }}" alt="Kegiatan Bersama" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Kegiatan Senam & Kebersamaan</h3>
                    <p class="text-gray-600 text-sm">Aktivitas senam pagi dan pembentukan karakter kebersamaan siswa di sekolah.</p>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 text-center py-4 text-sm">
        &copy; {{ date('Y') }} SMK Negeri 1 Cijati. All rights reserved.
    </footer>

</body>
</html>