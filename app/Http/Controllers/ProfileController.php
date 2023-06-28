<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ProfileController extends Controller
{
    public function showProfile()
    {
        return view('Users.profile');
    }

    public function editProfile(Request $request, $id){
        $user = User::find($id);
        $user -> name = $request->input('name');
        $user -> password = $request->input('password');
        $user->save();

        return redirect()->back()->with('flash_message', 'Event Updated!');  
    }
}
