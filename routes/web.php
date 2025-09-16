<?php


use Illuminate\Support\Facades\Route;

//posts index
Route::get('/', App\Livewire\Alat\Index::class)->name('alat.index');
Route::get('/inventori', [App\Livewire\Alat\Index::class, 'inventori'])->name('alat.inventori');

Route::get('/pinjam/{id}', [App\Http\Controllers\AlatController::class, 'pinjam'])->name('pinjam.show');
Route::post('/pinjam/{id}', [App\Http\Controllers\AlatController::class, 'submitPinjam'])->name('pinjam.submit');