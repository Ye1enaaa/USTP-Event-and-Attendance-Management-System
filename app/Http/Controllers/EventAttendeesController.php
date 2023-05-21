<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Attendee;
class EventAttendeesController extends Controller
{
    //
    public function addAttendees(Request $request){
        $event_id = "70b58896-b728-40b5-b00e-f7434d422f35";
        $event = Event::find($event_id);

        if(!$event){
            return response([
                'error' =>'error',
                'id' => $event_id
            ], 404);
        }

        $attendeesData = $request->input('attendeesData');
        if (!is_array($attendeesData)) {
            return response([
                'error' =>'Invalid attendees data'
            ], 400);
        }
        
        foreach($attendeesData as $attendeesData){
            $attendee = new Attendee();
            $attendee->name = $attendeesData['name'];
            $attendee->user_id = $attendeesData['user_id'];
            $attendee->studentId = $attendeesData['studentId'];
            $attendee->email = $attendeesData['email'];
            $attendee->event_id = $event_id;
            $attendee->save();
            
        }

        //$result= $event->attendees()->attach($attendee);
        //$event->attendees()->attach($attendee);
        return response([
            'event' => $event,
            'attendees' => $attendeesData
        ]);
    }

    public function getDatawithAttendee(){
        $event_id = "70b58896-b728-40b5-b00e-f7434d422f35";
        $event= Event::with('attendees')->find($event_id);
        return response([
            'event' => $event,
            'attendees' => $event->attendees
        ]);
    }
}
