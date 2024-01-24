<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('user.auth.login');
    }

    public function loginAction(Request $request)
    {
        Session::put('url.intended', url()->previous());

        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if ($user && password_verify($credentials['password'], $user->password)) {
            // Passwords match
            Auth::login($user); // Log the user in
            return redirect()->intended('/shop/product'); // Redirect to the intended URL or any default location
        } else {
            // Passwords do not match or user not found
            return redirect()->route('user.login')->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/user/login');
    }
}
