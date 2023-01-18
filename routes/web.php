<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KolaborasiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/kolaborasi', [KolaborasiController::class, 'index'])->name('kolaborasi');
Route::get('/home', [DashboardController::class, 'index'])->name('index');
// Route::get('/kolaborasi', [KolaborasiControllerler::class, 'index'])->name('kolaborasi.html');
// Route::get('/kolaborasi', [KolaborasiControllerler::class, 'index'])->name('kolaborasi.html');

