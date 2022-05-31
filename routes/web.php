<?php

use App\Http\Controllers\HomeController;
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

Route::get('/test', [HomeController::class, 'testView'])->name('testView');

Route::get('/{any}', [HomeController::class, 'index'])->where('any', '.*')->name('spa_home');

Route::get('/login', [HomeController::class, 'index'])->name('login');
