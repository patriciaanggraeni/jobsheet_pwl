<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "NIM: 2141720058, Nama: Patria Anggara Susilo Putra";
// } );

// Route::get('/articles/{id}', function ($id) {
//     return "Halaman artikel dengan id " . $id;
// } );

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'article']);


// Route::prefix('product') -> group( function() {
//     Route::get('/home', [PageController::class, 'hello']);
// } );

// Route::prefix('product') -> group( function() {
//     Route::get('/category', [PageController::class, 'show_product']);
// });

// Route::prefix('product') -> group( function() {
//     Route::get('/news/{param}', [PageController::class, 'show_news']);
// });

// Route::prefix('daftar')->group(function () {
//     Route::get('/program', [PageController::class, 'show_program']);
// });

// Route::get('/about', [PageController::class, 'show_about_us']);

// Route::resource('contact_us', PageController::class);

// Route::get('/helo', function () {
//     return view('hello', ['name' => 'Andi']);
// } );


// menghubungkan controller dengan views -> index
// Route::get('/home', [HomePage::class, 'index']);

// // menghubungkan controller dengan views -> product
// Route::prefix('daftar')->group(function () {
//     Route::get('/product', [PageController::class, 'show_product']);
// });

// // menghubungkan controller dengan views -> news{param}
// Route::prefix('daftar')->group(function () {
//     Route::get('/news{param}', [PageController::class, 'show_news']);
// });

// // menghubungkan controller dengan views -> program
// Route::prefix('daftar')->group(function () {
//     Route::get('/program', [PageController::class, 'show_program']);
// });

// // menghubungkan controller dengan views -> about_us
// Route::get('/about-us', [HomePage::class, 'show_about_us']);

// // menghubungkan controller dengan views -> contact_us
// Route::resource('/contact-us', ContactUsPage::class);


// Route::get('/index', [PageController::class, 'index']);
// Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/profile', [ProfileController::class, 'index']);
// Route::get('/kuliah', [KuliahController::class, 'index']);

// Route::get('/kendaraan', [KendaraanController::class, 'index']);


// membuat route untuk menampilkan data hobi, keluarga dan matkul
Route::get('/hobi', [HobiController::class, 'index']);
