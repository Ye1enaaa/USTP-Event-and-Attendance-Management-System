<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Attendee;
class UserController extends Controller
{
    //
    public function getuser($studentId){
        $user = User::where('studentId', $studentId)->first();
        return response([
            'user' => $user
        ]);
    }

    public function checkIfAttended($id,$studentId){
        $eventWithAttendee = Event::with(['attendees' => function ($query) use ($studentId) {
            $query->where('studentId', $studentId);
        }])->find($id);

        $attendees = $eventWithAttendee->attendees;
        
        if(!$eventWithAttendee){
            return response()->json([
                'error' => 'Not Found'
            ],404);
        }

        if($attendees->isEmpty()){
            return response()->json([
                'error' => 'Missed'
            ],404);
        }

        return response()->json([
            'attendee' => $attendees
        ],200);
    }

    public function userMobile(){
        return response()->json([
            'user' => auth()->user()
        ], 200);
    }
}
