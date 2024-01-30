<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\addresses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
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
            // Add other validation rules as needed
        ]);

        $user = User::find(auth()->user()->id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->phone = $request->input('phone');
        $user->save();

        $address = addresses::where('user_id', auth()->user()->id)->first();
        $address->address = $request->input('address');
        $address->city = $request->input('city');
        $address->state = $request->input('state');
        $address->phone = $request->input('phone');
        $address->timestamps = false;
        $address->save();
        $address->timestamps = true;



        return redirect()->back()->with('success', 'Profile data updated.');
    }

    public function changePassword(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|confirmed',
        ]);

        $user = auth()->user();

        // Check if the current password matches the one in the database
        if (!password_verify($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the user's password
        $user = User::find(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('home')->with('success', 'Password changed successfully.');
    }
}
