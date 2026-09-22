<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Berita Baru
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form action="{{ route('admin.berita.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block mb-1">Judul Berita</label>
                        <input type="text" name="judul" class="w-full border rounded p-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1">Isi Berita</label>
                        <textarea name="konten" rows="5" class="w-full border rounded p-2" required></textarea>
                    </div>

                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan Berita</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>