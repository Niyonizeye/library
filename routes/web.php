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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\adminController::class, 'getAllBook'])->name('getAllBook');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/library/books', [App\Http\Controllers\adminController::class, 'addbook'])->name('addbook')->middleware('auth');

Route::get('/library/newlibralian', [App\Http\Controllers\adminController::class, 'newLibrian'])->name('newLibrian')->middleware('auth');

Route::post('/library/addbooks', [App\Http\Controllers\adminController::class, 'registerBook'])->name('registerbook')->middleware('auth');

Route::post('/library/newLibralian', [App\Http\Controllers\adminController::class, 'newLibrianManager'])->name('newLibrianManager')->middleware('auth');

