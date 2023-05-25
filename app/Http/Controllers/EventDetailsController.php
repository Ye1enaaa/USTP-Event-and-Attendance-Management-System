<?php

namespace App\Http\Controllers;

use App\Models\Event;


class EventDetailsController extends Controller
{
    public function show($id,$studentId)
    {
        $event = Event::find($id);
        $eventWithAttendee = Event::with('attendees')->find($id);
        $user = auth()->user();

        if(!$event){
            abort(404,'Event Not Found');
        }

        $isAttending = $user ? $eventWithAttendee->attendees->contains('studentId', $studentId) : false;

        // if(!$isAttending){
        //     abort(404,'Cannot find id in attendees');
        // }

        return view('Users.evdetails', compact('event', 'isAttending'));

    }
}
