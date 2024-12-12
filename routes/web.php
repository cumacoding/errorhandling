<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorHandlingController;
use App\Http\Controllers\ErrorController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('index', [ErrorController::class, 'index'])->name('index');
Route::post('errorprocess', [ErrorHandlingController::class, 'errorprocess'])->name('errorprocess');
