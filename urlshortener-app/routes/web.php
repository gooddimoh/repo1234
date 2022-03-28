<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth;
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

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/urlshortener', [App\Http\Controllers\UrlShortener::class, 'urlshortener'])->name('urlshortener');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index2', [App\Http\Controllers\UrlShortener::class, 'index2'])->name('index2');
Route::get('/urlsgenerator', [App\Http\Controllers\UrlShortener::class, 'urlsgenerator'])->name('urlsgenerator');
//Auth::routes();

