<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventAttendeesController;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/student/{studentId}' , [UserController::class, 'getuser']);

Route::post('/attendance' , [EventAttendeesController::class, 'addAttendees']);
Route::get('/getattendance' , [EventAttendeesController::class,'getDatawithAttendee']);