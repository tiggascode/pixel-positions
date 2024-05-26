<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class RegisterController extends Controller
{
    public function create()
    {
        return Inertia::render('Auth/Register');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $employerAttributes = $request->validate([
            'employer' => ['required'],
        ]);

        $user = User::create($credentials);

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
        ]);


        Auth::login($user);

        return Inertia::location('/');


    }
}
