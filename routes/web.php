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
Route::get('jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
Route::get('jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
Route::post('jurusan', [JurusanController::class, 'store'])->name('jurusan.store');
// Route::resource('jurusan', JurusanController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
