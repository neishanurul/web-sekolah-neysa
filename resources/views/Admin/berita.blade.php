<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Berita & Pengumuman') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Pesan Sukses -->
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Tabel Daftar Berita & Tombol Edit -->
            <div class="p-6 bg-white shadow sm:rounded-lg">
                <h3 class="text-lg font-bold mb-4">Daftar Berita Utama</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b bg-gray-50">
                                <th class="p-3">ID</th>
                                <th class="p-3">Judul Berita</th>
                                <th class="p-3">Kategori</th>
                                <th class="p-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($beritaList as $item)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-3">{{ $item['id'] }}</td>
                                <td class="p-3 font-semibold">{{ $item['judul'] }}</td>
                                <td class="p-3"><span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">{{ $item['kategori'] }}</span></td>
                                <td class="p-3 text-center">
                                    <!-- Tombol Pemicu Edit (Mengisi Form di Bawah) -->
                                    <button onclick="editBerita({{ $item['id'] }}, '{{ $item['judul'] }}', '{{ $item['kategori'] }}')" 
                                            class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold px-3 py-1 rounded text-sm transition">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Form Edit Berita -->
            <div class="p-6 bg-white shadow sm:rounded-lg">
                <h3 class="text-lg font-bold mb-4" id="form-title">Edit Berita</h3>
                <form id="form-edit" method="POST" action="">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Judul Berita</label>
                        <input type="text" name="judul" id="input-judul" required class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Kategori</label>
                        <select name="kategori" id="input-kategori" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            <option value="Pengumuman">Pengumuman</option>
                            <option value="Kegiatan">Kegiatan</option>
                            <option value="Prestasi">Prestasi</option>
                        </select>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg shadow transition">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- JavaScript Sederhana untuk Mengisi Form Edit -->
    <script>
        function editBerita(id, judul, kategori) {
            document.getElementById('form-title').innerText = 'Edit Berita (ID: ' + id + ')';
            document.getElementById('input-judul').value = judul;
            document.getElementById('input-kategori').value = kategori;
            
            // Set action form ke URL update sesuai ID
            document.getElementById('form-edit').action = '/admin/berita/' + id;
            
            // Scroll otomatis ke form edit
            document.getElementById('form-edit').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</x-app-layout>