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

Route::get('/', function () {
    return view('index');
});
Route::get('/kolaborasi', function () {
    return view('kolaborasi');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register_page');
});
Route::get('/form-publikasi', function () {
    return view('publikasi_form');
});
// Route::get('/penelitian-animasi', function () {
//     return view('penelitian_animasi');
// });
// Route::get('/penelitian-aplikasigame', function () {
//     return view('penelitian_aplikasigame');
// });
// Route::get('/penelitian-fashion', function () {
//     return view('penelitian_fashion');
// });
// Route::get('/penelitian-kriya', function () {
//     return view('penelitian_kriya');
// });
// Route::get('/penelitian-kuliner', function () {
//     return view('penelitian_kuliner');
// });

<<<<<<< HEAD
Route::get('/detail-penelitian', function () {
    return view('penelitian_detail');
});
=======
// Route::get('/detail-penelitian', function () {
//     return view('penelitian_detail');
// });

Route::get('/penelitian/{jenis}', [PenelitianController::class, 'index'])->name('penelitian.index');
Route::get('/detail-penelitian/{slug}', [PenelitianController::class, 'detail'])->name('penelitian.detail');
>>>>>>> ef33309 (update list)

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


