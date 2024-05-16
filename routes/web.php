<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/perfiles',[UserController::class, 'index'])->name('index');
Route::get('/create',[UserController::class, 'create'])->name('create');
Route::post('/store',[UserController::class, 'store'])->name('store');
Route::get('/show/{id}', [UserController::class, 'show'])->name('show');
Route::get('/edit/{info}', [UserController::class,'edit'])->name('edit');
Route::put('/update/{info}', [UserController::class,'update'])->name('update');