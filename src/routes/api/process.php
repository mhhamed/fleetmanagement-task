<?php
use Illuminate\Support\Facades\Route;



Route::get('trips', [App\Http\Controllers\Api\Process\TripController::class, 'index']);
Route::get('trips/{id}/seats', [App\Http\Controllers\Api\Process\SeatController::class, 'index']);
Route::group(['middleware'=> ['auth']], function(){
    Route::post('booking', [App\Http\Controllers\Api\Process\UserSeatController::class, 'store']);
});
