<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\contactController;
use App\Http\Controllers\servicesController;

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
    return view('home');
})->name('home');

Route::get('skill', function () {
    return view('skill');
})->name('skill');

Route::get('services',[servicesController::class,'show'])->name('services');

Route::get('contact',[contactController::class,'show'])->name('contact');