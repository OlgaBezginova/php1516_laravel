<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MainController::class, 'index']);

Route::prefix('users')->name('users.')->group(function(){
    Route::get('/', [UserController::class, 'list'])->name('list');
    Route::get('/{id}', [UserController::class, 'view'])->name('user');
    Route::put('/create', [UserController::class, 'create'])->name('create');
    Route::post('/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [UserController::class, 'delete'])->name('delete');
    Route::get('/{id}/videos', [UserController::class, 'videos'])->name('videos');
});

Route::prefix('videos')->name('videos.')->group(function(){
    Route::get('/', [UserController::class, 'list'])->name('list');
    Route::get('/{id}', [UserController::class, 'view'])->name('video');
    Route::put('/create', [UserController::class, 'create'])->name('create');
    Route::post('/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [UserController::class, 'delete'])->name('delete');
});


