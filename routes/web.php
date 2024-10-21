<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KolaborasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenelitianController;
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
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/kolaborasi', function () {
    return view('kolaborasi');
});
Route::get('/register', function () {
    return view('register_page');
});
Route::get('/form-publikasi', function () {
    return view('publikasi_form');
});
Route::get('/penelitian-animasi', function () {
    return view('penelitian_animasi');
});
Route::get('/penelitian-aplikasigame', function () {
    return view('penelitian_aplikasigame');
});
Route::get('/penelitian-fashion', function () {
    return view('penelitian_fashion');
});
Route::get('/penelitian-kriya', function () {
    return view('penelitian_kriya');
});
Route::get('/penelitian-kuliner', function () {
    return view('penelitian_kuliner');
 });

 Route::get('/penelitian-arsitektur', function () {
    return view('penelitian_arsitektur');
 });
Route::get('/penelitian-desaininterior', function () {
    return view('penelitian_desaininterior');
 });
 Route::get('/penelitian-musik', function () {
    return view('penelitian_musik');
 });
 Route::get('/penelitian-senirupa', function () {
    return view('penelitian_senirupa');
 });
 Route::get('/penelitian-desainproduk', function () {
    return view('penelitian_desainproduk');
 });
 Route::get('/penelitian-film', function () {
    return view('penelitian_film');
 });
 Route::get('/penelitian-fotografi', function () {
    return view('penelitian_fotografi');
 });
 Route::get('/penelitian-desainkomunikasivisual', function () {
    return view('penelitian_desainkomunikasivisual');
 });
 Route::get('/penelitian-televisiradio', function () {
    return view('penelitian_televisiradio');
 });
 Route::get('/penelitian-periklanan', function () {
    return view('penelitian_periklanan');
 });
 Route::get('/penelitian-senipertunjukan', function () {
    return view('penelitian_senipertunjukan');
 });
 Route::get('/penelitian-penerbitan', function () {
    return view('penelitian_penerbitan');
 });


 Route::get('/detail-kolaborasi', function () {
    return view('kolaborasi_detail');
});


// Route::get('/detail-penelitian', function () {
//     return view('penelitian_detail');
// });



Route::get('/penelitian/{jenis}', [PenelitianController::class, 'index'])->name('penelitian.index');
Route::get('/detail-penelitian/{slug}', [PenelitianController::class, 'detail'])->name('penelitian.detail');


// Route::get('/kolaborasi', [KolaborasiController::class, 'index'])->name('kolaborasi.index');
// Route::get('/home', [DashboardController::class, 'index'])->name('index');
// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::get('/register', [LoginController::class, 'index'])->name('register_page');
// Route::get('/form-publikasi', [PenelitianControllerController::class, 'index'])->name('publikasi_form');
// Route::get('/penelitian-animasi', [PenelitianController::class, 'index'])->name('penelitian_animasi');
// Route::get('/penelitian-aplikasigame', [PenelitianController::class, 'index'])->name('penelitian_aplikasigame');
// Route::get('/detail-penelitian', PenelitianController::class, 'index'])->name('detail_penelitian');
// Route::get('/penelitian-fashion', [PenelitianController::class, 'index'])->name('penelitian_fashion');
// Route::get('/penelitian-kriya', [PenelitianController::class, 'index'])->name('penelitian_kriya');
// Route::get('/penelitian-kuliner', [PenelitianController::class, 'index'])->name('penelitian_kuliner');
// Route::get('/kolaborasi', [KolaborasiControllerler::class, 'index'])->name('kolaborasi.html');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
// Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
