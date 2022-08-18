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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/article/{id}', [App\Http\Controllers\ArticleController::class, 'index'])->name('article')->where('id', '[0-9]+');
Route::get('/brand/{id}', [App\Http\Controllers\BrandController::class, 'index'])->name('brand')->where('id', '[0-9]+');
Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'index'])->name('aboutus');

Auth::routes();

