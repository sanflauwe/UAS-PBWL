<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;

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

Route::resource('items', ItemController::class);

Route::prefix('/order')->group(function () {
    Route::get('/index', [OrderController::class, 'index']);
    Route::get('/insert', [OrderController::class, 'insert']);
});
