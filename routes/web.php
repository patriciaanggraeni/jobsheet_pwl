<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group( function() {

    Route::get('/', [HobiController::class, 'index']);
    Route::get('/keluarga', [KeluargaController::class, 'index']);
    Route::get('/kendaraan', [KendaraanController::class, 'index']);
    Route::get('/matkul', [MatkulController::class, 'index']);

    Route::resource('/mahasiswa', MahasiswaController::class)->parameter('mahasiswa', 'id');
    Route::post('/mahasiswa/data', [MahasiswaController::class, 'data_mahasiswa']);
    Route::get('/mahasiswa/{id}/detail_khs',[MahasiswaController::class,'show_khs']);
    Route::get('/mahasiswa/export_mahasiswa_pdf/{id}', [MahasiswaController::class, 'export_mahasiswa_pdf'])->name('export_mahasiswa_pdf');


    Route::resource('/articles', ArticleController::class);
    Route::get('/article/exportpdf', [ArticleController::class, 'export_pdf'])->name('export_pdf');
} );
