<?php

use App\Filament\Resources\AlatResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;



Route::resource('/', AlatController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("register", [\App\Http\Controllers\Auth\AuthController::class, "register"]);
  
Route::get('login', [\App\Http\Controllers\Auth\AuthController::class, 'index'])->name('login');
Route::post('post-login', [\App\Http\Controllers\Auth\AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [\App\Http\Controllers\Auth\AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [\App\Http\Controllers\Auth\AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');