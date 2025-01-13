<?php

use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\BukuController;
use App\Http\Controllers\Admin\PinjamBukuController;
use App\Http\Controllers\Admin\DetailPinjamController;
use App\Http\Controllers\contoh;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/', function(){
    return view('homepage');
});
Route::get('/ko', [contoh::class, 'index']);

 
// Route::middleware(['auth', 'admin'])->group(function () {
// });
// menambah data
Route::get('/anggota', [AnggotaController::class, 'index'])->name('admin.anggota');
Route::get('/anggota/tambah', [AnggotaController::class, 'create'])->name('admin.anggota.tambah');
Route::post('/anggota/tambah', [AnggotaController::class, 'store'])->name('admin.anggota.tambah.store');

// mengupdate data
Route::get('/anggota/update/{id}', [AnggotaController::class, 'show'])->name('admin.anggota.update');
Route::put('/anggota/update/{id}', [AnggotaController::class, 'update'])->name('admin.anggota.update.store');

// menghapus data
Route::delete('/anggota/delete/{id}', [AnggotaController::class, 'delete'])->name('admin.anggota.delete');

// Route::middleware(['auth', 'admin'])->group(function () {
// });
Route::get('/buku', [BukuController::class, 'index'])->name('admin.buku');
Route::get('/buku/tambah', [BukuController::class, 'create'])->name('admin.buku.tambah');
Route::post('/buku/tambah', [BukuController::class, 'store'])->name('admin.buku.tambah.store');

// menampilkan data
Route::get('/beranda', [BerandaController::class, 'index'])->name('admin.beranda')->middleware('auth');
Route::get('/pinjam', [PinjamBukuController::class, 'index'])->name('admin.pinjam');
Route::get('/detail', [DetailPinjamController::class, 'index'])->name('admin.detail');



Route::prefix('admin')->group(function () {

    // // menampilkan data
    // Route::get('/beranda', [BerandaController::class, 'index'])->name('admin.beranda');
    // Route::get('/anggota', [AnggotaController::class, 'index'])->name('admin.anggota');
    // Route::get('/buku', [BukuController::class, 'index'])->name('admin.buku');
    // Route::get('/pinjam', [PinjamBukuController::class, 'index'])->name('admin.pinjam');
    // Route::get('/detail', [DetailPinjamController::class, 'index'])->name('admin.detail');


    // // menambah data
    // Route::get('/anggota/tambah', [AnggotaController::class, 'create'])->name('admin.anggota.tambah');
    // Route::post('/anggota/tambah', [AnggotaController::class, 'store'])->name('admin.anggota.tambah.store');

    // Route::get('/buku/tambah', [BukuController::class, 'create'])->name('admin.buku.tambah');
    // Route::post('/buku/tambah', [BukuController::class, 'store'])->name('admin.buku.tambah.store');

    // // mengupdate data
    // Route::get('/anggota/update/{id}', [AnggotaController::class, 'show'])->name('admin.anggota.update');
    // Route::put('/anggota/update/{id}', [AnggotaController::class, 'update'])->name('admin.anggota.update.store');

    // // mengupdate data
    // Route::delete('/anggota/delete/{id}', [AnggotaController::class, 'delete'])->name('admin.anggota.delete');

});

Auth::routes();

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginform'])->name('login');
