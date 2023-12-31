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
Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [App\Http\Controllers\Main\IndexController::class, 'main'])->name('main.index');
    Route::get('/pricing', [App\Http\Controllers\Main\IndexController::class, 'pricing'])->name('pricing.index');

});
