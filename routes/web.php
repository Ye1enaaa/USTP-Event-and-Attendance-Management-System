<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventDetailsController;

Route::get('/', function () {
    return view('welcome');
});

// Login & Register of Users\\
Route::get('/login' , [ViewsController::class, 'returnLoginView']);
Route::get('/register' , [ViewsController::class,'returnRegisterView']);
Route::controller(LoginController::class)->group(function(){
    Route::post('/register','register')->name('user.register');
    Route::post('/login', 'login')->name('user.login');
    Route::post('/logout' , 'logout')->name('user.logout');
});


//Views for student or Admin Dashboard
Route::get('/admin' , [ViewsController::class, 'returnAdminDashboardView']);
Route::get('/student' , [ViewsController::class, 'returnStudentDashboardView']);

//EventController
Route::controller(EventController::class)->group(function(){
    Route::post('/addevent', 'addEvent')->name('add.event');
    Route::delete('/delete/{id}', 'destroy')->name('delete.event');
});


//EventDetailsController
Route::get('users/event/details/{id}', [EventDetailsController::class, 'show'])->name('event.details');



