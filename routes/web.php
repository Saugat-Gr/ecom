<?php

use App\Http\Controllers\Back\DashBoardController;
use App\Http\Controllers\Back\LoginController;
use App\Http\Controllers\Back\PasswordController;
use App\Http\Controllers\Back\ProfileController;
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


Route::group(['prefix' => 'cms', 'middleware' => 'auth:cms', 'as' => 'back.'], function () {

    Route::get(
        'dashboard',
        [DashBoardController::class, 'index']
    )->name('dashboard.index');

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.show');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::controller(PasswordController::class)->group(function () {
        Route::get('password', 'edit')->name('password.edit');
        Route::put('password', 'update')->name('password.update');
    });
});



Route::redirect('/', 'cms/dashboard');
