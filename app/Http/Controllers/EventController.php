<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Str;
class EventController extends Controller
{
    //
    public function addEvent(Request $request){
        $validateFields = $request->validate([
            'eventName' => 'required|string',
            'eventDate' => 'required',
            'eventPlace' => 'required|string',
            'eventDesc' => 'required'
        ]);
        $event = Event::create([
            'event_id' => Str::uuid(),
            'eventName' => $validateFields['eventName'],
            'eventDate' => $validateFields['eventDate'],
            'eventPlace' => $validateFields['eventPlace'],
            'eventDesc' => $validateFields['eventDesc']
        ]);

        return redirect('/admin');
    }
}
