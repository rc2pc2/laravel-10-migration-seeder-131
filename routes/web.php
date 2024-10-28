<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TrainController;
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

Route::get('/', [PageController::class, "home"])->name('home');
Route::get('/trains', [TrainController::class, "index"])->name('trains.index');
Route::get('/today-trains', [TrainController::class, "todayIndex"])->name('trains.today.index');
