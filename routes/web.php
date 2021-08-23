<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AccountTable;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PersonalController;
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

Route::get('/admin',[AdminController::class,'index']);

Route::get('/admin/table',[AccountTable::class,'index']);

Route::get('/index',[IndexController::class,'index']);

Route::get('/personal',[PersonalController::class,'index']);

Route::get('/detail',[DetailController::class,'index']);

Route::get('/contact-us',[ContactUsController::class,'index']);

Route::get('/about-us',[AboutUsController::class,'index']);



