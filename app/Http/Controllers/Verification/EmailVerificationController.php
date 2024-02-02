<?php

namespace App\Http\Controllers\Verification;

use App\Helpers\EmailHelper;
use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;


class EmailVerificationController extends Controller
{

    public function index()
    {
        return view('user.auth.verification.email-verification');
    }

    public function validateOtp(Request $request)
    {
        // dd($request->otp);
        $user = User::where('code', $request->otp)->first();

        $otp = User::where('email', $user->email)->value('code');

        if ($otp == $request->otp) {

            User::where('email', $user->email)->update(['is_verified' => '1']);

            return redirect()->route('user.verifiedSuccessfull')->withSuccess('Email verified successfully');
        } else {

            return redirect()->back()->withErrors('Invalid Otp, Please check email for new Otp');
        }
    }

    public function verifiedSuccessfull()
    {
        return view('user.auth.verification.verification-successful');
    }
}
