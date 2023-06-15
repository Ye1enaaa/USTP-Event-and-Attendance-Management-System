<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventDetailsController;
use App\Http\Controllers\ProfileController;

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
    Route::get('/createevent','returnCreateEventView');
    Route::post('/addevent', 'addEvent')->name('add.event');
    Route::delete('/delete/{id}', 'destroy')->name('delete.event');


    Route::get('/edit-event/{id}','editEvent')->name('edit-event');
    Route::put('/update-event/{id}','updateEvent')->name('update-event');

    
    //-------------FETCH EVENTS BY DATE-------------------\\
    Route::get('/todaysevent','fetchEventTodayWeb');
    Route::get('/upcomingevents','fetchUpcomingEventsWeb');
    Route::get('/endedevents','fetchEndedEventsWeb');
});


//EventDetailsController
Route::get('users/event/details/{id}/attended/{studentId}', [EventDetailsController::class, 'show'])->name('event.details');
Route::get('/profile', [ProfileController::class, 'showProfile']);