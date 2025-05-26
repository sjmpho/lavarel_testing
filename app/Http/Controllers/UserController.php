<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function Register(Request $request)
    {
        $incommingFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

       $user =  User::create($incommingFields);

        auth()->login($user);

        return redirect('/toMain');
    }
}
