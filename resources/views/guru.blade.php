<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Guru - SMK Negeri 1 Cijati</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans text-gray-800 min-h-screen flex flex-col justify-between">

    <!-- Header / Navigation Bar -->
    <header class="bg-blue-600 text-white py-4 px-6 md:px-12 flex items-center justify-between shadow-md">
        <h1 class="text-xl md:text-2xl font-extrabold tracking-wide uppercase">
            SMK NEGERI 1 CIJATI
        </h1>
        <nav class="hidden md:flex items-center space-x-6 text-sm font-semibold">
            <!-- Tombol Beranda -->
            <a href="{{ route('home') }}" class="hover:text-blue-200 transition">Beranda</a>
            <a href="{{ route('profil') }}" class="hover:text-blue-200 transition">Profil</a>
            <a href="{{ route('jurusan') }}" class="hover:text-blue-200 transition">Jurusan</a>
            <a href="{{ route('guru') }}" class="hover:text-blue-200 transition font-bold underline">Guru</a>
            <a href="{{ route('ekskul') }}" class="hover:text-blue-200 transition">Ekskul</a>
            <a href="{{ route('galeri') }}" class="hover:text-blue-200 transition">Galeri</a>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main class="max-w-7xl mx-auto px-6 py-12 flex-1 w-full">
        <!-- Judul Halaman -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-blue-600 mb-2">Daftar Guru & Tenaga Pendidik</h2>
            <p class="text-gray-600">Guru dan staf pengajar profesional SMK Negeri 1 Cijati.</p>
        </div>

        <!-- Grid Cards Guru -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse($guru ?? $dataGuru ?? [] as $item)
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition p-6 flex flex-col items-center text-center border border-gray-100">
                    <!-- Foto / Avatar Guru -->
                    <div class="w-24 h-24 mb-4 rounded-full overflow-hidden bg-blue-50 border-2 border-blue-500 flex items-center justify-center">
                        @if(!empty($item['foto']) && file_exists(public_path('images/' . $item['foto'])))
                            <img src="{{ asset('images/' . $item['foto']) }}" alt="{{ $item['nama'] ?? 'Guru' }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-2xl font-bold text-blue-600">
                                {{ strtoupper(substr($item['nama'] ?? 'G', 0, 1)) }}
                            </span>
                        @endif
                    </div>

                    <!-- Nama Guru -->
                    <h3 class="font-bold text-gray-900 text-base mb-1">
                        {{ $item['nama'] ?? 'Nama Guru' }}
                    </h3>

                    <!-- Jabatan -->
                    <p class="text-sm text-gray-500">
                        {{ $item['jabatan'] ?? 'Tenaga Pengajar' }}
                    </p>
                </div>
            @empty
                <div class="col-span-full text-center py-12 bg-white rounded-xl shadow-sm">
                    <p class="text-gray-500 text-lg">Data guru belum tersedia.</p>
                </div>
            @endforelse
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 text-center py-4 text-sm">
        &copy; {{ date('Y') }} SMK Negeri 1 Cijati. All rights reserved.
    </footer>

</body>
</html>