<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MainController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::Group(['prefix' =>'v1'] ,function(){

    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('resetpassword', [AuthController::class, 'resetpassword']);
    Route::post('forgetpassword', [AuthController::class, 'forgetpassword']);
 

    Route::group(['middleware'=>'auth:api'],function(){
        Route::get('books', [MainController::class, 'books']);
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/book', [MainController::class, 'singlebook']);
        Route::get('/getdownload{id}', [MainController::class, 'getdownload']);
        
       
    });
  

});