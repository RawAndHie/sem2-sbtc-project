<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AccountPendingController;
use App\Http\Controllers\AccountTable;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PostPendingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TradeController;
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
//client
Route::get('/',[IndexController::class,'index']);

Route::get('/personal',[PersonalController::class,'index']);

Route::get('/detail',[DetailController::class,'index']);

Route::get('/contact-us',[ContactUsController::class,'index']);

Route::get('/about-us',[AboutUsController::class,'index']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/post',[TradeController::class,'index']);
Route::post('/post',[TradeController::class,'store']);

//Route::post('/quanhuyen/{id}', [TradeController::class, 'getQuanHuyen'])->name('get.qh');
//Route::post('/phuongxa/{id}', [TradeController::class, 'getPhuongXa']);


//admin

Route::get('/admin/index',[AdminController::class,'index']);

Route::get('/admin/account-pending',[AccountPendingController::class,'index']);
Route::post('/admin/account-pending/{id}',[AccountPendingController::class,'update']);
Route::delete('/admin/account-pending/{id}',[AccountPendingController::class,'destroy']);


Route::get('/admin/post-pending',[PostPendingController::class,'index']);

Route::get('/admin/edit-about-us',[ConfigController::class,'aboutUsPage']);
Route::get('/admin/edit-contact-us',[ConfigController::class,'contactUsPage']);
Route::get('/admin/edit-policy',[ConfigController::class,'policyPage']);

Route::post('/admin/edit-about-us/',[ConfigController::class,'aboutUsStore']);
Route::post('/admin/edit-contact-us',[ConfigController::class,'contactUsStore']);
Route::post('/admin/edit-policy',[ConfigController::class,'policyStore']);

Route::get('/admin/list-category',[CategoryController::class,'index']);
//Route::post('/admin/add-category',[CategoryController::class,'index']);

Route::get('/admin/add-category',[CategoryController::class,'create']);
Route::post('/admin/add-category',[CategoryController::class,'store']);
