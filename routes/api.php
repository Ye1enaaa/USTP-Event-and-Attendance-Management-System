<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventAttendeesController;
use App\Http\Controllers\EventController;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//-------------------------ATTENDANCE MONITORING APIs-----------------------------\\
Route::get('/student/{studentId}' , [UserController::class, 'getuser']);
Route::post('/attendance/{event_id}' , [EventAttendeesController::class, 'addAttendees']);
Route::get('/getattendance' , [EventAttendeesController::class,'getDatawithAttendee']);//Experiment
Route::get('/eventname/{id}' , [EventAttendeesController::class,'fetchEventData']); //Fetch By ID

//---------------------------FOR STUDENT------------------------------\\
Route::get('/events' , [EventController::class, 'index']);
Route::get('/event/{id}/attendee/{studentId}' , [UserController::class,'checkIfAttended']);

//------------------------EXPERIMENTATION APIs-------------------------\\
Route::delete('/delete/{id}',[EventController::class,'destroy']);