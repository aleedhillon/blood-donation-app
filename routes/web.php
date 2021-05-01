<?php

use App\Http\Controllers\ShoutoutController;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/shoutouts', [ShoutoutController::class, 'index'])->name('shoutouts.index');
Route::get('/shoutouts/create', [ShoutoutController::class, 'create'])->name('shoutouts.create');
Route::post('/shoutouts', [ShoutoutController::class, 'store'])->name('shoutouts.store');
