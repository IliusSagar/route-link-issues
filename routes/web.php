<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/category/{id}', 'CategoryController@show')->name('list.category');

// Route::get('/{id}',[CategoryController::class,'show'])->name('list.category');
// Route::get('/category/{id}',[CategoryController::class,'show'])->name('list.category');
Route::get('/category/{id}/{slug}',[CategoryController::class,'show'])->name('list.category');
