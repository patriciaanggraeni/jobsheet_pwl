<?php

// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Models\MahasiswaModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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



Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group( function() {

    // membuat route mengarah ke dashboard
    Route::get('/', [DashboardController::class, 'index']);

    // membuat route untuk menampilkan data hobi
    Route::get('/hobi', [HobiController::class, 'index']);

    // membuat route untuk menampilkan data keluarga
    Route::get('/keluarga', [KeluargaController::class, 'index']);

    // membuat route untuk menampilkan data matkul
    Route::get('/matkul', [MatkulController::class, 'index']);

    // membuat route untuk crud dan ubah parameternya
    Route::resource('/mahasiswa', MahasiswaController::class)->parameter('mahasiswa', 'id');
    Route::get('/mahasiswa/{id}/detail_khs',[MahasiswaController::class,'khs']);

} );
