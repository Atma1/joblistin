<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            "password" => ["required"],
            "email" => ["required", "email"]
        ]);

        if (!Auth::attempt($validatedAttributes)) {
            throw ValidationException::withMessages([
                "email" => "Credentials don't match.",
            ]);
        }


        request()->session()->regenerate();

        return redirect("/");
    }

    public function destroy()
    {
        Auth::logout();

        return redirect("/");
    }
}
