<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            "name" => ["required"],
            "email" => ["required", "email"],
            "password" => ["required", Password::min(3), "confirmed"],
        ]);

        $user = User::create($validatedAttributes);

        Auth::login($user);

        return redirect('/jobs');
    }
}
