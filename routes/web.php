<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AccountForAdminController;
use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\AccountTable;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\PostForAdmin;
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
Route::get('/detail/{id}',[IndexController::class,'show']);


Route::get('/personal',[PersonalController::class,'index']);

Route::get('/contact-us',[ContactUsController::class,'index']);
Route::get('/about-us',[AboutUsController::class,'index']);
Route::get('/policy',[PolicyController::class,'index']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'store']);

Route::get('/account-settings',[AccountSettingsController::class,'index']);
Route::post('/account-settings',[AccountSettingsController::class,'store']);

Route::get('/post',[TradeController::class,'index']);
Route::post('/post',[TradeController::class,'store']);

//Route::post('/quanhuyen/{id}', [TradeController::class, 'getQuanHuyen'])->name('get.qh');
//Route::post('/phuongxa/{id}', [TradeController::class, 'getPhuongXa']);


//admin

Route::get('/admin/index',[AdminController::class,'index']);

Route::get('/admin/account-pending',[AccountForAdminController::class,'index']);
Route::get('/admin/account-list',[AccountForAdminController::class,'list']);
Route::get('/admin/delete-account',[AccountForAdminController::class,'listDelete']);
Route::post('/admin/account-pending/{id}',[AccountForAdminController::class,'update']);
Route::post('/admin/delete-account/{id}',[AccountForAdminController::class,'update']);
Route::delete('/admin/account-pending/{id}',[AccountForAdminController::class,'destroy']);
Route::delete('/admin/account-list/{id}',[AccountForAdminController::class,'destroy']);

Route::get('/admin/post-pending',[PostForAdmin::class,'index']);
Route::get('/admin/post-list',[PostForAdmin::class,'list']);
Route::get('/admin/delete-post',[PostForAdmin::class,'listDelete']);
Route::post('/admin/delete-post/{id}',[PostForAdmin::class,'update']);
Route::post('/admin/post-pending/{id}',[PostForAdmin::class,'update']);
Route::delete('/admin/post-pending/{id}',[PostForAdmin::class,'destroy']);
Route::delete('/admin/post-list/{id}',[PostForAdmin::class,'destroy']);

Route::get('/admin/edit-about-us',[ConfigController::class,'aboutUsPage']);
Route::get('/admin/edit-contact-us',[ConfigController::class,'contactUsPage']);
Route::get('/admin/edit-policy',[ConfigController::class,'policyPage']);

Route::post('/admin/edit-about-us/',[ConfigController::class,'aboutUsStore']);
Route::post('/admin/edit-contact-us',[ConfigController::class,'contactUsStore']);
Route::post('/admin/edit-policy',[ConfigController::class,'policyStore']);

Route::get('/admin/list-category',[CategoryController::class,'index']);
Route::get('/admin/add-category',[CategoryController::class,'create']);
Route::post('/admin/add-category',[CategoryController::class,'store']);
Route::get('/admin/category/{id}/edit',[CategoryController::class,'edit']);
Route::post('/admin/category/{id}',[CategoryController::class,'update']);
Route::delete('/admin/category/{id}',[CategoryController::class,'destroy']);
