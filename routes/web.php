<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::get('/rooms', [\App\Http\Controllers\RoomsController::class, 'index'])->name('rooms');

Route::get('/rooms/lux', [\App\Http\Controllers\LuxController::class, 'index'])->name('lux');

Route::get('/form', [\App\Http\Controllers\FormController::class, 'index'])->name('form');

Route::post('/form/submit', [\App\Http\Controllers\FormController::class, 'order_check']);
