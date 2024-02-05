<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\addresses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.profile');
    }

    public function edit()
    {
        return view('user.edit');
    }

    public function editAction(Request $request)
    {

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
            // Add other validation rules as needed
        ]);

        $user = User::find(auth()->user()->id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->phone = $request->input('phone');
        $user->save();

        $address = addresses::updateorInsert(
            ['user_id' => auth()->user()->id],
            [
                'fullname' => auth()->user()->firstname.' '. auth()->user()->lastname,
                'address' => $request->input('address'),
                'state' => $request->input('state'),
                'city' => $request->input('city'),
                'phone' => $request->input('phone'),
                'isPrimary' => 1
            ]
        );

        $address->timestamps = true;

        return redirect()->back()->with('success', 'Profile data updated.');
    }

    public function changePassword(Request $request)
    {

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = auth()->user();
        // Check if the current password matches the one in the database
        if (!password_verify($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the user's password
        $user = User::find(auth()->user()->id)->update([
            'password' => Hash::make($request->password),
        ]);

        Auth::logout();
        return redirect()->route('user.login')->with('success', 'Password changed successfully.');
    }
}
