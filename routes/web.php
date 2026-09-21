<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PosController;


Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::resource('users', UserController::class);

    Route::resource('categories', CategoryController::class);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/pos', [PosController::class, 'index'])
    ->name('pos.index');

Route::get('/pos', [PosController::class, 'index'])
    ->middleware('auth')
    ->name('pos.index');
    
Route::get('/pos/history', [PosController::class, 'history'])
    ->middleware('auth')
    ->name('pos.history');


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');