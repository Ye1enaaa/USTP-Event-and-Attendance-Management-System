<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Attendee;
class Event extends Model
{
    use HasFactory;
    protected $fillable =[
        'event_id',
        'eventName', // what
        'eventTime',
        'eventDate', //when
        'eventPlace', //where
        'eventPicture',
        'eventDesc'
    ];

    //protected $primaryKey = 'event_id';
    
    public function attendees(){
        return $this->hasMany(Attendee::class);
    }
}
