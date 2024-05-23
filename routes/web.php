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

//Barang Masuk
Route::get('/data-barang-masuk', [BarangMasukController::class, 'index'])->name('barangmasuk.index');

//Barang Keluar
Route::get('data-barang-keluar', [BarangKeluarController::class, 'index'])->name('barangkeluar.index');

//Peminjaman
Route::get('/data-peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');

//Pengembalian
Route::get('/data-pengembalian', [PengembalianController::class, 'index'])->name('pengembalian.index');

//Berita
Route::get('/data-berita', [BeritaController::class, 'index'])->name('berita.index');

//Kategori Berita
Route::get('/data-kategori-berita', [KategoriBeritaController::class, 'index'])->name('kategoriberita.index');

//Dosen
Route::get('/data-dosen', [DosenController::class, 'index'])->name('dosen.index');

//Mahasiswa
Route::get('/data-mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
//Create Mahasiswa
Route::get('/create-mahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');


//Tabel USer
Route::get('/data-user', [UserController::class, 'index'])->name('user.index');