<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PembimbingController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\SaranmasukanController;

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

Route::get('/', [IndexController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('pembimbing', PembimbingController::class);
Route::resource('penelitian', PenelitianController::class);
Route::resource('anggota', AnggotaController::class);
Route::resource('bimbingan', BimbinganController::class);
Route::resource('saranmasukan', SaranmasukanController::class);
