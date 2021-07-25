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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', [App\Http\Controllers\MenuController::class, 'index'])->name('menu.index');
Route::get('/edit', [App\Http\Controllers\MenuController::class, 'edit'])->name('menu.edit');
Route::get('/create', [App\Http\Controllers\MenuController::class, 'create'])->name('menu.create');
Route::get('/edit/{id}', [App\Http\Controllers\MenuController::class, 'editProduct'])->name('menu.editProduct');
Route::post('/store', [App\Http\Controllers\MenuController::class, 'store'])->name('menu.store');
Route::get('/delete/{id}', [App\Http\Controllers\MenuController::class, 'delete'])->name('menu.delete');
Route::get('/recommended/add/{id}', [App\Http\Controllers\MenuController::class, 'addRecommended'])->name('menu.addRecommended');
Route::get('/recommended/delete/{id}', [App\Http\Controllers\MenuController::class, 'deleteRecommended'])->name('menu.deleteRecommended');


