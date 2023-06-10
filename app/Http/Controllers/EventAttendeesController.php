<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Attendee;
class EventAttendeesController extends Controller
{
    //
    public function addAttendees(Request $request, $event_id){
        //$event_ids = "ac6e0d3c-afd3-4411-80e6-f3f30cc0dc4b";
        $event = Event::where('event_id',$event_id)->first();

        //$event_id = $event->event_id;
        $eventId = $event->id;
        if(!$event){
            return response([
                'error' =>'error',
                'id' => $event_id
            ], 404);
        }
    
        $validateField = $request->validate([
            'studentId' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);

        $attendeeData = Attendee::create([
            'studentId' => $validateField['studentId'],
            'name' => $validateField['name'],
            'email' => $validateField['email'],
            'event_id' => $eventId //1
        ]);
    
        return response([
            'event' => $event,
            'attendees' => $attendeeData
        ]);
    }
    
    public function fetchAllEventsWithAttendee($studentId){
        $events = Event::with('attendees')->get();
        $response = [];

    foreach ($events as $event) {
        foreach ($event->attendees as $attendee) {
            if ($attendee->studentId == $studentId) {
                $response[] = [
                    'eventName' => $event->eventName,
                    'eventDate' => $event->eventDate,
                    'eventPicture' => $event->eventPicture,
                    'status' => 'Attended'
                ];
                break;
            }
        }
    }

    return response([
        'attendanceStatus' => $response
    ]);
    }
    public function getDatawithAttendee(){
        $event_id = "5056ed7c-9f3a-4503-ab65-e0bdd37c6cd9";
        $event= Event::with('attendees')->find($event_id);
        return response([
            'event' => $event,
            'attendees' => $event->attendees
        ]);
    }

    public function fetchEventData($id){
        $eventName = Event::with('attendees')->find($id);
        return response([
            'event' =>  $eventName,
            'eventid' => $eventName->id
        ]);
    }

    public function fetchEventDatabyID($id){
        $eventName = Event::where('id',$id)->get();

        return response([
            'event' =>  $eventName
        ]);
    }
}
