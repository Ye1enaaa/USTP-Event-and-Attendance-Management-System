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
        

        $password = $request->input('password');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $user->password = $hashedPassword;

        if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('user_profile', 'public');
            $user->picture = $imagePath;
        }

        $user->save();

        return redirect()->back()->with('flash_message', 'Event Updated!');  
    }
}
