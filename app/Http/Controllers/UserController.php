<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate()
    {
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
}
