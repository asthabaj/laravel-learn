<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        //for logging in
        //validate
        $attriibutes=request()-> validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        //attempt to login user
        if ( !Auth::attempt($attriibutes))
        {
            throw ValidationException::withMessages([
                'email' => "sorry, credentials do not match"
            ]);
        }

        //regenerate the session token
        request()->session()->regenerate();//session hijackingbata bachaucha

        //redirect
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }


}
