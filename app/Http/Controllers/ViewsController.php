<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //Views
    public function returnLoginView(){
        return view('login');
    }
}
