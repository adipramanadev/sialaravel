<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
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

//rute jurusan
Route::get('jurusan',[App\Http\Controllers\JurusanController::class, 'index'])->name('jurusan.index');
Route::get('create-jurusan',[App\Http\Controllers\JurusanController::class, 'create'])->name('jurusan.create');
Route::post('store-jurusan',[App\Http\Controllers\JurusanController::class, 'store'])->name('jurusan.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
