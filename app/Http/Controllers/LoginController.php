<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function store(Request $request){

        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($attributes)) {
            
            $user = Auth::user();
           
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('index')->with(['success' => 'You are logged in.']);
                case 'client':
                    return redirect()->route('')->with(['success' => 'You are logged in.']);
                default:
                    return redirect()->route('login')->with(['error' => 'Invalid role.']);
            }
            
        }
        else {
            return back()->withErrors(['email' => 'Email or password invalid.']);
        }
}
public function destroy(Request $request)
    {
        

        Auth::logout();
       

        return view('login');
    }
}