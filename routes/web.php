<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\PageController;


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

Route::get('/helo', function () {
    return view('hello', ['name' => 'Andi']);
} );


// menyambungkan view dengan controller
Route::get('/home', [HomePage::class, 'index']);

Route::prefix('daftar')->group(function () {
    Route::get('/product', [PageController::class, 'show_product']);
});

Route::prefix('daftar')->group(function () {
    Route::get('/news{param}', [PageController::class, 'show_news']);
});

Route::prefix('daftar')->group(function () {
    Route::get('/program', [PageController::class, 'show_program']);
});

Route::get('/about-us', [HomePage::class, 'show_about_us']);

Route::resource('/contact-us', ContactUsPage::class);
