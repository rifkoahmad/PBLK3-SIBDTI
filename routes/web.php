<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

// Route::get('dashboard', [DasboardController::class, 'index']);

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('log', [LoginController::class, 'login'])->name('login.store');

//Register
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/regist', [RegisterController::class, 'store'])->name('register.store');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Dashboard
Route::get('/dashboard', [DasboardController::class, 'index'])->name('dashboard.index')->middleware('auth');

//Barang
Route::get('/data-barang', [BarangController::class, 'index'])->name('barang.index');
// Create Barang
Route::get('/create-barang', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');

//Barang Masuk
Route::get('/data-barang-masuk', [BarangMasukController::class, 'index'])->name('barangmasuk.index');
// Create Barang Masuk
Route::get('/create-barang-masuk', [BarangMasukController::class, 'create'])->name('barangmasuk.create');
Route::post('/barang-masuk', [BarangMasukController::class, 'store'])->name('barangmasuk.store');

//Barang Keluar
Route::get('data-barang-keluar', [BarangKeluarController::class, 'index'])->name('barangkeluar.index');
// Create Barang Keluar
Route::get('/create-barang-keluar', [BarangKeluarController::class, 'create'])->name('barangkeluar.create');
Route::post('/barang-keluar', [BarangKeluarController::class, 'store'])->name('barangkeluar.store');

//Peminjaman
Route::get('/data-peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
// Create Peminjaman
Route::get('/create-peminjaman', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');

//Pengembalian
Route::get('/data-pengembalian', [PengembalianController::class, 'index'])->name('pengembalian.index');
// Create Pengembalian
Route::get('/create-pengembalian', [PengembalianController::class, 'create'])->name('pengembalian.create');
Route::post('/pengembalian', [PengembalianController::class, 'store'])->name('pengembalian.store');

//Berita
Route::get('/data-berita', [BeritaController::class, 'index'])->name('berita.index');
// Create Berita
Route::get('/create-berita', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');

//Dosen
Route::get('/data-dosen', [DosenController::class, 'index'])->name('dosen.index');
// Create Dosen
Route::get('/create-dosen', [DosenController::class, 'create'])->name('dosen.create');
Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.store');

//Mahasiswa
Route::get('/data-mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
//Create Mahasiswa
Route::get('/create-mahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');


//Tabel USer
Route::get('/data-user', [UserController::class, 'index'])->name('user.index');
