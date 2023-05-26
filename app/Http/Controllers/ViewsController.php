<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
class ViewsController extends Controller
{
    //Views
    public function returnLoginView(){
        return view('login');
    }

    public function returnStudentDashboardView(){
        $events = Event::all();
        return view('Users.student', compact('events'));
    }

    public function returnAdminDashboardView(){
        $events = Event::with('attendees')->get();
        return view('Users.admin', compact('events'));
    }

    public function returnRegisterView(){
        return view('register');
    }
}
