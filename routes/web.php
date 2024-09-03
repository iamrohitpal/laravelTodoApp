<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index'])->name('showData');
Route::post('add', [TodoController::class, 'store'])->name('addData');
