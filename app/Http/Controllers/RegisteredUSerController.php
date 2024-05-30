<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisteredUSerController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'fname' => ['required'],
            'lname' => ['required'],
            'email' => ['required','email'],
            'password' => ['required',Password::min(4)->letters()->numbers(),'confirmed'], //password_confirmation ma match huna parcha
        
        ]);
        //create the user in database
        $user=User::create($attributes);

        //login
        Auth::login($user);

        //redirect sm
        return redirect('/jobs');

    }
}
