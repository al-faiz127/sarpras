<?php


use Illuminate\Support\Facades\Route;

//posts index
Route::get('/', App\Livewire\Alat\Index::class)->name('alat.index');
Route::get('/inventori', [App\Livewire\Alat\Index::class, 'inventori'])->name('alat.inventori');

Route::get('/pinjam/{alat_id}', [App\Livewire\Alat\Index::class, 'pinjam'])->name('alat.pinjam');