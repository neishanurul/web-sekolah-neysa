<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kelola Berita Sekolah
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <a href="{{ route('admin.berita.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Berita</a>

                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="w-full text-left border-collapse border border-gray-200 mt-4">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2">Judul</th>
                            <th class="border p-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($berita as $item)
                            <tr>
                                <td class="border p-2">{{ $item->judul }}</td>
                                <td class="border p-2">
                                    <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="border p-2 text-center">Belum ada berita.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
<table class="w-full border-collapse border border-gray-200">
    <thead>
        <tr class="bg-gray-100">
            <th class="border p-2">No</th>
            <th class="border p-2">Nama</th>
            <th class="border p-2">Aksi</th> <!-- Kolom Baru -->
        </tr>
    </thead>
    <tbody>
        @foreach ($guru as $index => $item)
            <tr>
                <td class="border p-2 text-center">{{ $index + 1 }}</td>
                <td class="border p-2">{{ $item->nama }}</td>
                <td class="border p-2 text-center">
                    <!-- Tombol Edit -->
                    <a href="{{ route('guru.edit', $item->id) }}" 
                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm font-medium transition">
                        Edit
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>