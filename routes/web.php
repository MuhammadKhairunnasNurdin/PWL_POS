<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');

Route::get('/kategori/create', [KategoriController::class, 'create'])->name('TambahKategori');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('EditKategori');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('UpdateKategori');
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('DeleteKategori');

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/level/create', [LevelController::class, 'create'])->name('level.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::post('/user', [UserController::class, 'store']);
Route::post('/level', [LevelController::class, 'store']);

Route::resource('m_user', POSController::class);
