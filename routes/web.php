<?php


use Illuminate\Support\Facades\Route;

//posts index
Route::get('/', App\Livewire\Alat\Index::class)->name('alat.index');
