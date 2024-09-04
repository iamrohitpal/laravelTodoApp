<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index'])->name('index');
Route::get('create', [TodoController::class, 'create'])->name('create');
Route::post('store', [TodoController::class, 'store'])->name('store');
Route::get('details/{id}', [TodoController::class, 'show'])->name('details');
Route::get('edit/{id}', [TodoController::class, 'edit'])->name('edit');
Route::post('update', [TodoController::class, 'update'])->name('update');
Route::get('delete/{id}', [TodoController::class, 'destroy'])->name('delete');
