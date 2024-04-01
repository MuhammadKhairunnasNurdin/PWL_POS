<?php

use App\Http\Controllers\BarangResourceController;
use App\Http\Controllers\KategoriResourceController;
use App\Http\Controllers\LevelResourceController;
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

/**
 * Route for jobsheet 3, 4, and 5
 */
/*Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);*/

/**
 * Route for Jobsheet 2, 3 and 4
 */
/*Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');*/

/**
 * Route for Jobsheet 5
 */
/*Route::get('/kategori/create', [KategoriController::class, 'create'])->name('TambahKategori');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('EditKategori');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('UpdateKategori');
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('DeleteKategori');*/

/**
 * Route for Jobsheet 6 before we create m_user Resource Controller
 */
/*Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/level/create', [LevelController::class, 'create'])->name('level.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::post('/user', [UserController::class, 'store']);
Route::post('/level', [LevelController::class, 'store']);*/

/**
 * Route for Jobsheet 6 for all Resource controller
 */
/*Route::resource('m_user', POSController::class);*/

/**
 * Group Route for Jobsheet 7 in User feature
 */
Route::group(['prefix' => 'user'], function () {
    /**
     * Route for home page User
     */
    Route::get('/', [UserController::class, 'index']);

    /**
     * Route for show user data with JSON type in datatables
     */
    Route::post('/list', [UserController::class, 'list']);

    /**
     * Route for showing page User form
     */
    Route::get('/create', [UserController::class, 'create']);

    /**
     * Route for saving User form
     */
    Route::post('/', [UserController::class, 'store']);

    /**
     * Route for show detailed User data
     */
    Route::get('/{id}', [UserController::class, 'show']);

    /**
     * Route for showing edit User Form
     */
    Route::get('/{id}/edit', [UserController::class, 'edit']);

    /**
     * Route for saving edited form User
     */
    Route::put('/{id}', [UserController::class, 'update']);

    /**
     * Route for delete User data
     */
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

/**
 * Route for Resource in Level table: create, store, show, edit, update, and destroy, also with list that return JsonResponse
 */
Route::resource('level', LevelResourceController::class);
Route::post('level/list', [LevelResourceController::class, 'list']);

/**
 * Route for Resource in Level table: create, store, show, edit, update, and destroy, also with list that return JsonResponse
 */
Route::resource('kategori', KategoriResourceController::class);
Route::post('kategori/list', [KategoriResourceController::class, 'list']);

/**
 * Route for Resource in Level table: create, store, show, edit, update, and destroy, also with list that return JsonResponse
 */
Route::resource('barang', BarangResourceController::class);
Route::post('barang/list', [BarangResourceController::class, 'list']);
