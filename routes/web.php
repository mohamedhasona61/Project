<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Front\FrontController;

Route::group(['namespace'=>'Front'],function(){
    Route::get('/',[FrontController::class,'index']);
    Route::get('aboutus',[FrontController::class,'about']);
    Route::get('web',[FrontController::class,'web']);
    Route::get('contactus',[FrontController::class,'contactus']);
    Route::get('bookshop',[FrontController::class,'bookshop']);
    Route::get('data',[FrontController::class,'data']);
    Route::get('mobile',[FrontController::class,'mobile']);
    Route::get('login_user',[FrontController::class,'login_user']);
    Route::get('login_admin',[FrontController::class,'login_admin']);
    Route::get('register_user',[FrontController::class,'register_user']);
    // Route::get('register_admin',[FrontController::class,'register_admin']);
    Route::get('reset',[FrontController::class,'reset']);
});

Auth::routes();

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('resetpassword', [AuthController::class, 'resetpassword']);
Route::post('forgetpassword', [AuthController::class, 'forgetpassword']);

Route::group([],function(){
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('categories',CategoryController::class);
    Route::resource('books',BookController::class);
});