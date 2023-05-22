<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'user_id',
        'studentId',
        'event_id'
    ];
    

    // public function event(){
    //     return $this->belongsTo(Event::class,'event_id');
    // }

    public function event(){
        return $this->belongsTo(Event::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}
