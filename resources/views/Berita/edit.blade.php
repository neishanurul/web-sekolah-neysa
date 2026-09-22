<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-md">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Edit Data Guru</h2>

        <form action="{{ route('guru.update', $guru->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Wajib untuk proses update di Laravel -->

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Guru</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $guru->nama) }}" required
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                @error('nama')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <a href="{{ route('guru.index') }}" class="text-sm text-gray-500 hover:underline">Batal</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

</body>
</html>