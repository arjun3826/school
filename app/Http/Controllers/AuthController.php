<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

// use App\Models\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function auth(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required ',
        ]);
        if (\Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        } else
            echo 'invalid email or password';


    }

    public function registered(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required ',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
        ]);
        return back()->withSuccess('Successfull registered !!');
        // $credentials = $request->only('name', 'email', 'password');

        // if (Auth::attempt($credentials)) {
        //     return redirect()->route('home')->with('success', 'Login successful!');
        // }

        // return redirect()->back()->withErrors(['login' => 'Invalid credentials. Please try again.']);

        if (\Auth::attempt($request->only('name', 'email', 'password'))) {
            return redirect('home');
        } else
            return redirect('registered')->withErrors('Errors', "Login successful!");
    }

    public function home()
    {
        return view('admin.home');
    }
}
