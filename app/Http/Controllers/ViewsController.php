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
        return view('Users.student');
    }

    public function returnAdminDashboardView(){
        $events = Event::all();
        return view('Users.admin', compact('events'));
    }
}
