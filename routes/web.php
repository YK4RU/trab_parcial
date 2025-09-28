<?php

use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;

Route::get('/names', [NameController::class, 'index'])->name('names.index');

Route::get('/names/create', [NameController::class, 'create'])->name('names.create');
Route::post('/names', [NameController::class, 'store'])->name('names.store');
Route::get('/names/{name}', [NameController::class, 'show'])->name('names.show');
Route::get('/names/{name}/edit', [NameController::class, 'edit'])->name('names.edit');
Route::put('/names/{name}', [NameController::class, 'update'])->name('names.update');
Route::delete('/names/{name}', [NameController::class, 'destroy'])->name('names.destroy');
