<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function login()
    {

        return view('auth.login');
    }
    public function post_login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            if (auth()->user()->hasRole('admin')) {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('dashboard.index');
            }
        } else {
            return redirect()->back()->with('error', "Wrong Email or Password");
        }
    }

    public function register () {
        return view('auth.register');
    }
    public function post_register (Request $request) {
        $request->validate(
            [
                'name' => 'required',
                'email' =>'required|email|unique:users',
                'password' => 'required|min:8'
            ],
        );

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->assignRole('user');



        return redirect()->route('auth.login');

    }

}
