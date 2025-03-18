<?php

use App\Http\Controllers\Auth\AboutController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\DataSiswaController;
use App\Http\Controllers\Auth\JadwalController;
use App\Http\Controllers\Auth\PelanggaranController;
use App\Http\Controllers\Auth\LaporanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashboardController::class, 'indexPage'])->name('dashboard');
Route::get('/about',[AboutController::class, 'indexPage'])->name('about');
Route::get('/datasiswa',[DataSiswaController::class, 'indexPage'])->name('datasiswa');
Route::get('/jadwal',[JadwalController::class, 'indexPage'])->name('jadwal');
Route::get('/pelanggaran',[PelanggaranController::class, 'indexPage'])->name('pelanggaran');
Route::get('/laporan',[LaporanController::class, 'indexPage'])->name('laporan');
