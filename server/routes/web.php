<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
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
    Route::get('/', [UserController::class, 'index'])->name('list');
    Route::get('/{id}', [UserController::class, 'view'])->name('user');
    Route::get('/add', [UserController::class, 'add'])->name('add');
    Route::get('/{id}/update', [UserController::class, 'update'])->name('update');
    Route::put('/', [UserController::class, 'create'])->name('create');
    Route::post('/{id}', [UserController::class, 'edit'])->name('edit');
    Route::delete('/{id}', [UserController::class, 'delete'])->name('delete');
    Route::get('/{id}/videos', [UserController::class, 'videos'])->name('videos');
});

Route::prefix('videos')->name('videos.')->group(function(){
    Route::get('/', [VideoController::class, 'index'])->name('list');
    Route::get('/{id}', [VideoController::class, 'view'])->name('video');
    Route::get('/add', [VideoController::class, 'add'])->name('add');
    Route::get('/{id}', [VideoController::class, 'update'])->name('update');
    Route::put('/create', [VideoController::class, 'create'])->name('create');
    Route::post('/{id}', [VideoController::class, 'edit'])->name('edit');
    Route::delete('/{id}', [VideoController::class, 'delete'])->name('delete');
});


