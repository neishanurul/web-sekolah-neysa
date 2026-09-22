<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - SMK Negeri 1 Cijati</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans text-gray-800 min-h-screen flex flex-col justify-between">

   <!-- Header / Navigation Bar -->
<header class="bg-blue-600 text-white py-4 px-6 md:px-12 flex items-center justify-between shadow-md relative z-20">
    <div class="flex items-center space-x-3">
        
        <!-- Logo Sekolah Asli -->
        <img src="{{ asset('images/logo.png') }}" alt="Logo SMKN 1 Cijati" class="w-10 h-10 object-contain">

        <div>
            <h1 class="text-xl md:text-2xl font-extrabold tracking-wide uppercase">
                SMK NEGERI 1 CIJATI
            </h1>
            <p class="text-xs text-blue-100 hidden sm:block">Berkarakter, Kompeten, dan Berdaya Saing</p>
        </div>
    </div>

    <nav class="hidden md:flex items-center space-x-6 text-sm font-semibold">
        <a href="{{ route('home') }}" class="bg-blue-700 px-3 py-1.5 rounded-lg transition">Beranda</a>
        <a href="{{ route('profil') }}" class="hover:text-blue-200 transition">Profil</a>
        <a href="{{ route('jurusan') }}" class="hover:text-blue-200 transition">Jurusan</a>
        <a href="{{ route('guru') }}" class="hover:text-blue-200 transition">Guru</a>
        <a href="{{ route('ekskul') }}" class="hover:text-blue-200 transition">Ekskul</a>
        <a href="{{ route('galeri') }}" class="hover:text-blue-200 transition">Galeri</a>
        <a href="#" class="bg-white text-blue-600 hover:bg-blue-50 px-4 py-2 rounded-lg font-bold transition shadow-sm">Login Admin</a>
    </nav>
</header>

    <!-- Main Content -->
    <main class="flex-1 w-full">
        <!-- Banner Utama (Hero Section) -->
        <section class="relative bg-cover bg-center bg-no-repeat py-32 px-6 text-center text-white" 
                 style="background-image: linear-gradient(rgba(29, 78, 216, 0.75), rgba(30, 58, 138, 0.85)), url('{{ asset('images/gerbang.jpg') }}');">
            
            <div class="max-w-4xl mx-auto relative z-10">
                <h2 class="text-3xl md:text-5xl font-extrabold mb-4 drop-shadow-lg leading-tight">
                    Selamat Datang di Website Resmi Sekolah
                </h2>
                <p class="text-base md:text-xl mb-8 text-blue-100 max-w-2xl mx-auto font-normal">
                    Mewujudkan generasi cerdas, berkarakter, unggul dalam teknologi, dan berakhlaq mulia.
                </p>
                <a href="{{ route('profil') }}" class="inline-block bg-amber-400 hover:bg-amber-500 text-gray-900 font-bold px-8 py-3.5 rounded-full transition shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Pelajari Profil Kami
                </a>
            </div>
        </section>

        <!-- Seksi Berita & Informasi Terbaru -->
<section class="max-w-7xl mx-auto px-6 py-16">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10">
        <div>
            <h3 class="text-2xl md:text-3xl font-extrabold text-gray-900">Berita & Informasi Terbaru</h3>
            <p class="text-gray-500 mt-1">Ketahui kegiatan dan pengumuman terbaru di SMKN 1 Cijati.</p>
        </div>
    </div>
        
        <!-- Berita 1: Pengukuhan Paskibra -->
        <article class="bg-white rounded-xl shadow-sm hover:shadow-md transition overflow-hidden border border-gray-100 flex flex-col">
            <div class="h-64 bg-gray-100 relative overflow-hidden">
                <img src="{{ asset('images/paskibra.jpg') }}" alt="Pengukuhan Paskibra Kabupaten Cianjur" class="w-full h-full object-cover">
            </div>
            <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                    <span class="text-xs font-bold text-amber-600 uppercase tracking-wider bg-amber-50 px-2.5 py-1 rounded">Prestasi</span>
                    <span class="text-xs text-gray-400 ml-2">18 September 2026</span>
                    <h4 class="text-lg font-bold text-gray-900 mt-3 mb-2 hover:text-blue-600 transition cursor-pointer">
                        Pengukuhan Pasukan Pengibar Bendera Pusaka Kabupaten Cianjur
                    </h4>
                    <p class="text-gray-600 text-sm line-clamp-3">
                        Selamat dan sukses kepada Ilham Sulaeman atas pengukuhan sebagai Pasukan Pengibar Bendera Pusaka (Paskibraka) Kabupaten Cianjur.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-gray-100">
                    <a href="#" class="text-blue-600 font-semibold text-sm hover:underline inline-flex items-center">
                        Baca Selengkapnya &rarr;
                    </a>
                </div>
            </div>
        </article>

        <!-- Berita 2: Juara O2SN -->
        <article class="bg-white rounded-xl shadow-sm hover:shadow-md transition overflow-hidden border border-gray-100 flex flex-col">
            <div class="h-64 bg-gray-100 relative overflow-hidden">
                <img src="{{ asset('images/o2sn.jpg') }}" alt="Juara O2SN Tingkat Kabupaten Cianjur" class="w-full h-full object-cover">
            </div>
            <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                    <span class="text-xs font-bold text-amber-600 uppercase tracking-wider bg-amber-50 px-2.5 py-1 rounded">Prestasi</span>
                    <span class="text-xs text-gray-400 ml-2">15 September 2026</span>
                    <h4 class="text-lg font-bold text-gray-900 mt-3 mb-2 hover:text-blue-600 transition cursor-pointer">
                        Juara 3 Bulutangkis & Atletik Putri O2SN Kabupaten Cianjur
                    </h4>
                    <p class="text-gray-600 text-sm line-clamp-3">
                        Selamat kepada siswi SMKN 1 Cijati yang meraih Juara 3 Bulutangkis Tunggal Putri dan Juara 3 Atletik Putri pada O2SN Tingkat Kabupaten Cianjur.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-gray-100">
                    <a href="#" class="text-blue-600 font-semibold text-sm hover:underline inline-flex items-center">
                        Baca Selengkapnya &rarr;
                    </a>
                </div>
            </div>
        </article>

    </div>
</section>    
                        

            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 text-center py-4 text-sm">
        &copy; {{ date('Y') }} SMK Negeri 1 Cijati. All rights reserved.
    </footer>

</body>
</html>