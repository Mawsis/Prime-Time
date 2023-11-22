<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Purchase;

class UserController extends Controller
{
    public function create()
    {
        return view("user.create");
    }
    public function store()
    {
        $validatedAttributes = request()->validate([
            "name"=> ['required','max:255'],
            "email"=> ['required','max:255','unique:users,email'],
            "password"=> ['required','max:255','min:6','confirmed'],
            ]);
        $user = User::create($validatedAttributes);
        auth()->login($user);

        return redirect('/')->with('success','Register successfully');

    }

    public function show()
    {
        return view("user.show",[
            "user"=>auth()->user(),
            "purchases"=> Purchase::where(["user_id"=> auth()->user()->id])->with('product')->get()
        ]);
    }
}
