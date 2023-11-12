<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\MasterBarangController;
use App\Http\Controllers\MasterKategoriController;
use App\Http\Controllers\MasterGudangController;
use App\Http\Controllers\StokController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate'])
    ->name('kirim-data-login');

Route::get('/logout', [LoginController::class, 'logout'])
    ->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth');

Route::get('/master', [MasterController::class, 'index'])
    ->name('master')
    ->middleware('auth');

Route::get('/master/barang', [MasterBarangController::class, 'index'])
    ->name('master-barang')
    ->middleware('auth');

Route::get('/master/barang/tambah', [MasterBarangController::class, 'create'])
    ->name('master-barang-tambah')
    ->middleware('auth');

Route::post('/master/barang/simpan', [MasterBarangController::class, 'store'])
    ->name('master-barang-simpan')
    ->middleware('auth');

Route::get('/master/barang/hapus/{id}', [MasterBarangController::class, 'destroy'])
    ->name('master-barang-hapus')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/master/barang/detail/{id}', [MasterBarangController::class, 'show'])
    ->name('master-barang-detail')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/master/barang/edit/{id}', [MasterBarangController::class, 'edit'])
    ->name('master-barang-edit')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::post('/master/barang/update/{id}', [MasterBarangController::class, 'update'])
    ->name('master-barang-update')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/master/kategori', [MasterKategoriController::class, 'index'])
    ->name('master-kategori')
    ->middleware('auth');

Route::get('/master/kategori/tambah', [MasterKategoriController::class, 'create'])
    ->name('master-kategori-tambah')
    ->middleware('auth');

Route::post('/master/kategori/simpan', [MasterKategoriController::class, 'store'])
    ->name('master-kategori-simpan')
    ->middleware('auth');

Route::get('/master/kategori/edit/{id}', [MasterKategoriController::class, 'edit'])
    ->name('master-kategori-edit')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::post('/master/kategori/update/{id}', [MasterKategoriController::class, 'update'])
    ->name('master-kategori-update')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/master/kategori/hapus/{id}', [MasterKategoriController::class, 'destroy'])
    ->name('master-kategori-hapus')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/master/kategori/detail/{id}', [MasterKategoriController::class, 'show'])
    ->name('master-kategori-detail')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/master/gudang', [MasterGudangController::class, 'index'])
    ->name('master-gudang')
    ->middleware('auth');

    Route::get('/master/gudang/tambah', [MasterGudangController::class, 'create'])
    ->name('master-gudang-tambah')
    ->middleware('auth');

Route::post('/master/gudang/simpan', [MasterGudangController::class, 'store'])
    ->name('master-gudang-simpan')
    ->middleware('auth');

Route::get('/master/gudang/edit/{id}', [MasterGudangController::class, 'edit'])
    ->name('master-gudang-edit')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::post('/master/gudang/update/{id}', [MasterGudangController::class, 'update'])
    ->name('master-gudang-update')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/master/gudang/hapus/{id}', [MasterGudangController::class, 'destroy'])
    ->name('master-gudang-hapus')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/master/gudang/detail/{id}', [MasterGudangController::class, 'show'])
    ->name('master-gudang-detail')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/stok-masuk', [StokController::class, 'form_stok_masuk'])
    ->name('stok-masuk')
    ->middleware('auth');

Route::post('/stok-in', [StokController::class, 'proses_stok_masuk'])
    ->name('stok-in')
    ->middleware('auth');

Route::get('/stok-keluar', [StokController::class, 'form_stok_keluar'])
    ->name('stok-keluar')
    ->middleware('auth');

    Route::post('/stok-out', [StokController::class, 'proses_stok_keluar'])
    ->name('stok-out')
    ->middleware('auth');


