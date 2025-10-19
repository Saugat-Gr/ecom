<?php

use App\Http\Controllers\Back\DashBoardController;
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

Route::redirect('/', 'cms/dashboard');
