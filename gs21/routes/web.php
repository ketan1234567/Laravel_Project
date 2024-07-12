<?php

use App\Http\Controllers\contactController;
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
    return view('home');
})->name('home');

Route::get('aboutmesomthing', function () {
    return view('about');
})->name('aboutme');

Route::get('contact',[contactController::class,'show'])->name('contactus');


Route::get('post/{category}', function ($cat) {
    return view('post',['cat'=>$cat]);
})->name('minipost');