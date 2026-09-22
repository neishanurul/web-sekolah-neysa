<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Menampilkan daftar berita & form
    public function index()
    {
        // Data dummy berita (Bisa kamu ganti dengan Model Database nanti)
        $beritaList = [
            ['id' => 1, 'judul' => 'Penerimaan Peserta Didik Baru (PPDB)', 'kategori' => 'Pengumuman'],
            ['id' => 2, 'judul' => 'Pelaksanaan Ujian Keahlian Siswa', 'kategori' => 'Kegiatan'],
        ];

        return view('admin.berita', compact('beritaList'));
    }

    // Mengubah data berita
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string',
        ]);

        // Simpan perubahan ke database di sini
        return redirect()->back()->with('success', 'Berita berhasil diperbarui!');
    }
}