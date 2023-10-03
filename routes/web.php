<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MesyuaratController;

Route::get('/', function () {
    return view('welcome'); // view()
});

// Route untuk papar borang login
Route::get('/login', [LoginController::class, 'borangLogin'])->name('login');
// Tamat route untuk papar borang login

// Route untuk terima data dari borang login
Route::post('/login', [LoginController::class, 'checkLogin'])->name('login.check');
// Tamat route terima data dari borang login


Route::get('dashboard', DashboardController::class);


// Route::get('mesyuarat', [MesyuaratController::class, 'index'])->name('mesyuarat.index');
// Route::get('mesyuarat/new', [MesyuaratController::class, 'create'])->name('mesyuarat.create');
// Route::post('mesyuarat/add', [MesyuaratController::class, 'store'])->name('mesyuarat.store');
// Route::get('mesyuarat/{id}/edit', [MesyuaratController::class, 'edit'])->name('mesyuarat.edit');
// Route::patch('mesyuarat/{id}/edit', [MesyuaratController::class, 'update'])->name('mesyuarat.update');
// Route::get('mesyuarat/{id}', [MesyuaratController::class, 'show'])->name('mesyuarat.show');
// Route::delete('mesyuarat/{id}', [MesyuaratController::class, 'destroy'])->name('mesyuarat.destroy');

// Jika salah 1 function tidak gunakan resource, pastikan route untuk function tersebut
// berada di atas route resource supaya function tersebut tidak di overwrite oleh resource
// Route::get('mesyuarat', [MesyuaratController::class, 'senarai'])->name('mesyuarat.index');
// Route::resource('mesyuarat', MesyuaratController::class)->except('index');
Route::resource('mesyuarat', MesyuaratController::class);
