<?php

use App\Filament\Resources\AlatResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\Auth\AuthController;


Route::get('/', [AlatController::class, 'index'])->name('alat.index');
Route::get('/inventori', [AlatController::class, 'inventori'])->name('alat.inventori'); 


Route::get("register", [AuthController::class, "register"]);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');