<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

use App\Http\Livewire\Index;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Pembimbing;
use App\Http\Livewire\Penelitian;
use App\Http\Livewire\PublikasiPenelitian;
use App\Http\Livewire\DemoDokumentasiPenelitian;
use App\Http\Livewire\Berita;
use App\Http\Livewire\Anggota;
use App\Http\Livewire\Bimbingan;
use App\Http\Livewire\Saranmasukan;
use App\Http\Livewire\Praktikum;
use App\Http\Livewire\Laboratorium;

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

Route::get('/', Index::class)->name('index');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/pembimbing', Pembimbing::class)->name('pembimbing');
    Route::get('/penelitian', Penelitian::class)->name('penelitian');
    Route::get('/publikasipenelitian', PublikasiPenelitian::class)->name('publikasipenelitian');
    Route::get('/demodokumentasipenelitian', DemoDokumentasiPenelitian::class)->name('demodokumentasipenelitian');
    Route::get('/berita', Berita::class)->name('berita');
    Route::get('/anggota', Anggota::class)->name('anggota');
    Route::get('/bimbingan', Bimbingan::class)->name('bimbingan');
    Route::get('/praktikum', Praktikum::class)->name('praktikum');
    Route::get('/laboratorium', Laboratorium::class)->name('laboratorium');
    Route::get('/saranmasukan', Saranmasukan::class)->name('saranmasukan');
});
