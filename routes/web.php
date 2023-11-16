<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterLandingController;
use App\Http\Controllers\MasterMenuController;
use App\Http\Controllers\MasterWorkController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/about',[MasterMenuController::class, 'index'])
->name('menu-about');

Route::get('/home',[MasterMenuController::class, 'home'])
->name('menu-home');

Route::get('/skilss',[MasterMenuController::class, 'skills'])
->name('menu-skills');

Route::get('/work',[MasterMenuController::class, 'work'])
->name('menu-work');

Route::get('/contact',[MasterMenuController::class, 'contact'])
->name('menu-contact');

Route::get('/master/work/wedding/invitation',[MasterWorkController::class, 'index'])
->name('wedding-invitation');