<?php

// routes/web.php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::middleware('auth')->group(function () {
    // Rute untuk admin
    Route::middleware('admin')->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // Rute untuk karyawan
    Route::middleware('karyawan')->group(function () {
        Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.dashboard');
    });
});
Route::get('/pengaduan', [CategoryController::class, 'index'])->name('pengaduan.index');
Route::get('/pengaduan/tambah', [CategoryController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan/store', [CategoryController::class, 'store'])->name('pengaduan.store');
Route::get('/pengaduan/edit/{id}', [CategoryController::class, 'edit'])->name('pengaduan.edit');
Route::put('/pengaduan/update/{id}', [CategoryController::class, 'update'])->name('pengaduan.update');
Route::delete('hapus/{id}', [CategoryController::class, 'delete'])->name('pengaduan.delete');
Route::get('pengaduan/destroy/{id}', [CategoryController::class, 'destroy'])->name('pengaduan.destroy');
Route::get('pengaduan/cetak', [CategoryController::class, 'cetak'])->name('pengaduan.cetak');
