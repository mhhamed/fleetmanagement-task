<?php
use Illuminate\Support\Facades\Route;

Route::post('auth/login', [App\Http\Controllers\Api\Profile\Authentication\AuthenticationController::class,'login']);

Route::group(['prefix'=>'auth' , 'middleware'=> ['auth']], function(){

    Route::get('user', [App\Http\Controllers\Api\Profile\Authentication\AuthenticationController::class,'user']);
    
});
