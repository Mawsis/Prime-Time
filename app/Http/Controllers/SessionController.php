<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect("/")->with("fail","Logged Out");
    }
    public function create()
    {
        return view("session.create");
    }
    public function store()
    {
        $validatedAttributes = request()->validate([
            "email"=>["required","email","exists:users,email"],
            "password"=>["required"],
        ]);
        if(!auth()->attempt($validatedAttributes)){
            throw ValidationException::withMessages([
                "email"=> "Invalid Credentials"
                ]);
            }
        session()->regenerate();
        return redirect("/")->with("success","Logged In");
    }
}