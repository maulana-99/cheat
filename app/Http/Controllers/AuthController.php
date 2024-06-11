<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Mews\Captcha\Captcha;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view("login");
    }
    public function login(Request $request)
    {
        $messages = [
            'captcha.captcha' => 'Invalid captcha code.',
        ];

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ], $messages);

        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            switch (Auth::user()->role) {
                case 'tamu':
                    return redirect('/dashboard');
                case 'resepsionis':
                    return redirect('/dashboard/resepsionis');
                case 'admin':
                    return redirect('/dashboard/admin');
            }
        } else {
            // If login fails, redirect back to the login form with an error message
            return redirect('/login')->withErrors('Email and Password do not match')->withInput();
        }
    }

    public function RegisterPage()
    {
        return view("register");
    }
    public function register(Request $request)
    {
        $messages = [
            'email.unique' => 'Email sudah terdaftar',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok',
            'captcha.captcha' => 'Invalid captcha code.',
        ];
    
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'captcha' => 'required|captcha'
        ], $messages);
    
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }
    
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'email_verified_at' => now(),
            'password' => Hash::make($request->input('password')),
        ]);
    
        $user->save();
        Auth::login($user);
        return redirect('/dashboard');
    }

    public function logout()
    {
        Auth::logout();// Logout user
        return redirect('/login'); // Redirect ke login
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
