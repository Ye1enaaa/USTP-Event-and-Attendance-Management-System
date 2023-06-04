<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class LoginController extends Controller
{
    //
    public function login(Request $request){
        $credentials = $request -> validate([
            'studentId' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('studentId' , $credentials['studentId'])->first();

        if(!$user||!Hash::check($credentials['password'],$user->password)){
            return redirect('/login');
        }

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $user_role = $user->role;
            if($user_role == 1){
                return redirect('/admin');
            }else if($user_role == 2){
                return redirect('/student');
            }
        }
    }

    public function register(Request $request){
        $validation = $request->validate([
            'name' => 'required|string',
            //'role' => 'required|integer',
            'studentId' => 'required|integer',
            'department' => 'required|string',
            'year_section' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|min:8',
            'picture'=>'nullable|image|mimes:jpeg,png,jpg'
        ]);

        $imagePath = null;
        if ($request->hasFile('picture')) {
            $imagePath = $request->file('picture')->store('user_profile', 'public');
        }
        $user = User::create([
            'name' => $validation['name'],
            'user_id' => Str::uuid(4),
            //'role' => $validation['role'],
            'department' => $validation['department'],
            'year_section' => $validation['year_section'],
            'studentId' => $validation['studentId'],
            'email' => $validation['email'],
            'password' => Hash::make($validation['password']),
            'picture'=> $imagePath 
        ]);

        //$user->save();
       // dd($user);
        return redirect('/login')->with('Success','Registered Successfully');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    //----------------------MOBILE FUNCTIONS--------------------------\\
    public function loginMobile(Request $request){
        $credentials = $request->validate([
            'studentId' => 'required|integer',
            'password' => 'required|string'
        ]);

        $user = User::where('studentId', $credentials['studentId'])->first();

        if(!$user){
            return response()->json([
                'error' => 'ID number did not match on our database'
            ], 404);
        }

        if(!Hash::check($credentials['password'], $user->password)){
            return response()->json([
                'error' => 'Incorrect Password'
            ], 401);
        }

        $token = $user->createToken('secret')->plainTextToken;

        if(Auth::attempt($credentials)){
            return response()->json([
                'user' => $user,
                'token' => $token
            ], 200);
        }
    }

    public function registerMobile(Request $request){
        $validation = $request->validate([
            'name' => 'required|string',
            //'role' => 'required|integer',
            'studentId' => 'required|integer',
            'department' => 'required|string',
            'year_section' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|min:8',
            'picture'=>'nullable|image|mimes:jpeg,png,jpg'
        ]);

        $imagePath = null;
        if ($request->hasFile('picture')) {
            $imagePath = $request->file('picture')->store('user_profile', 'public');
        }
        $user = User::create([
            'name' => $validation['name'],
            'user_id' => Str::uuid(4),
            //'role' => $validation['role'],
            'department' => $validation['department'],
            'year_section' => $validation['year_section'],
            'studentId' => $validation['studentId'],
            'email' => $validation['email'],
            'password' => Hash::make($validation['password']),
            'picture'=> $imagePath 
        ]);

        return response()->json([
            'status' => 'Registered Successfully',
            'user' => $user
        ]);
    }
}
