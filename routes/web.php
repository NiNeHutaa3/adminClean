<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProsesController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\SelesaiController;
use App\Http\Controllers\InputController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/proses', function () {return view('proses');})->middleware(['auth', 'verified'])->name('proses');
Route::get('/masuk', function () {return view('masuk');})->middleware(['auth', 'verified'])->name('masuk');
Route::get('/selesai', function () {return view('selesai');})->middleware(['auth', 'verified'])->name('selesai');
Route::get('/laporan', function () {return view('laporan');})->middleware(['auth', 'verified'])->name('laporan');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/detail', [DetailController::class, 'showUpdatePage'])->name('detail.page');
Route::get('/input', [InputController::class, 'showUpdatePage'])->name('input.page');

require __DIR__.'/auth.php';
