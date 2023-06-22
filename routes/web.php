<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;

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
Route::get('/index',[HomeController::class,'index']);
Route::get('/courses',[CourseController::class,'course']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/contact',[ContactController::class,'contact']);
Route::get('/portfolio',[PortfolioController::class,'portfolio']);
// Route::get('/index',[HomeController::class,'index']);

