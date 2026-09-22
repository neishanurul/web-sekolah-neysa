<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;

/*
|--------------------------------------------------------------------------
| Web Routes - SMK Negeri 1 Cijati
|--------------------------------------------------------------------------
*/

// 1. Beranda / Home (Mengarahkan kembali ke halaman utama)
Route::get('/', function () {
    return view('welcome'); // Sesuaikan 'welcome' jika nama file berandamu berbeda (misal: 'home')
})->name('home');

// 2. Profil Sekolah
Route::get('/profil', function () {
    return view('profil');
})->name('profil');

// 3. Jurusan
Route::get('/jurusan', function () {
    return view('jurusan');
})->name('jurusan');

// 4. Guru & Tenaga Pendidik (Menggunakan GuruController)
Route::get('/guru', [GuruController::class, 'index'])->name('guru');

// 5. Ekstrakurikuler
Route::get('/ekskul', function () {
    return view('ekskul');
})->name('ekskul');

// 6. Galeri
Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');