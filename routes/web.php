<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ProfilPesertaController;
use App\Http\Controllers\SkemaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
})->name('home');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/ganti-password', [AuthController::class, 'showGantiPassword'])->name('password.edit');
    Route::put('/ganti-password', [AuthController::class, 'gantiPassword'])->name('password.update');

    Route::get('/skema', [SkemaController::class, 'index'])->name('skema.index');

    Route::middleware('peserta')->group(function () {
        Route::get('/profil/daftar', [ProfilPesertaController::class, 'create'])->name('profil.create');
        Route::post('/profil/daftar', [ProfilPesertaController::class, 'store'])->name('profil.store');
        Route::get('/profil/edit', [ProfilPesertaController::class, 'edit'])->name('profil.edit');
        Route::put('/profil/edit', [ProfilPesertaController::class, 'update'])->name('profil.update');
    });

    Route::middleware('admin')->group(function () {

        Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta.index');
        Route::get('/peserta/create', [PesertaController::class, 'create'])->name('peserta.create');
        Route::post('/peserta', [PesertaController::class, 'store'])->name('peserta.store');
        Route::get('/peserta/{id}/edit', [PesertaController::class, 'edit'])->name('peserta.edit');
        Route::put('/peserta/{id}', [PesertaController::class, 'update'])->name('peserta.update');
        Route::delete('/peserta/{id}', [PesertaController::class, 'destroy'])->name('peserta.destroy');
        Route::get('/peserta/{id}', [PesertaController::class, 'show'])->name('peserta.show');

        Route::get('/skema/create', [SkemaController::class, 'create'])->name('skema.create');
        Route::post('/skema', [SkemaController::class, 'store'])->name('skema.store');
        Route::get('/skema/{id}/edit', [SkemaController::class, 'edit'])->name('skema.edit');
        Route::put('/skema/{id}', [SkemaController::class, 'update'])->name('skema.update');
        Route::delete('/skema/{id}', [SkemaController::class, 'destroy'])->name('skema.destroy');

        Route::resource('users', UserController::class)->except(['show']);
    });

    Route::get('/skema/{id}', [SkemaController::class, 'show'])->name('skema.show');
});