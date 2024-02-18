<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterLandingController;
use App\Http\Controllers\MasterMenuController;
use App\Http\Controllers\MasterWorkController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [ServiceController::class, 'index'])
->name('view-index');

Route::post('/simpan/testimoni', [ServiceController::class, 'store' ])
->name('simpan-data');



