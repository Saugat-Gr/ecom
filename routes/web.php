<?php

use App\Http\Controllers\Back\DashBoardController;
use App\Http\Controllers\Back\LoginController;
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



Route::get(
    'cms/dashboard',
    [DashBoardController::class, 'index']
);

Route::get('cms/login', [LoginController::class, 'show'])->middleware('auth:cms');
Route::post('cms/login', [LoginController::class, 'login']);

Route::redirect('/', 'cms/dashboard');
