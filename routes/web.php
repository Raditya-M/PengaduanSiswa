<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReporterController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware; // <-- tambahin ini

// Daftarin manual
app('router')->aliasMiddleware('role', RoleMiddleware::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('admin', AdminController::class);
    Route::get('/admin/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::post('/admin/{id}/verifikasi', [AdminController::class, 'verifikasi'])->name('admin.verifikasi');
});

Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::resource('siswa', ReporterController::class);
    Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
});

require __DIR__.'/auth.php';
