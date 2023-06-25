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
    public function showEventDetailsAdmin($id){
        $event = Event::with('attendees')->find($id);
        return view('Users.eventdetailsadmin', compact('event'));
    }
    //---------------MABANTA-----------------\\
    public function showEventDetails($id){
        $eventAdmin = Event::find($id);
        $eventWithAttendee = Event::with('attendees')->find($id);
        return response()->json([
            'event' => $eventWithAttendee,
            'attendees' => $eventWithAttendee->attendees
        ]);

        if(!$eventWithAttendee){
            return response()->json([
                'error' => '404 Not Found'
            ], 404);
        }
    }
}
