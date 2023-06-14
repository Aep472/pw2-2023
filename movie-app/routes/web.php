<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});

Route::resource('/movies', MovieController::class);


// yang di bawahnya itu genres ya

Route::resource('/genres', GenreController::class);

//////////////////////////////////////////////////////////////////

Route::resource('/reviews', ReviewController::class);



/////////////////////////////////////////////////

Route::get('/', [HomeController::class, 'index']);




