<?php

namespace App\Http\Controllers;

use App\Models\Event;


class EventDetailsController extends Controller
{
    public function show($id)
    {
        $event = Event::find($id);
        return view('Users.evdetails', compact('event'));

    }
}
