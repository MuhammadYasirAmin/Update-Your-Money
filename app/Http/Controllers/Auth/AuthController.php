<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\UserVerify;
use Hash;
use Illuminate\Support\Str;
use Mail;

class AuthController extends Controller
{
    public function loginSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()
                ->intended('/Authorized/User-Dashboard')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect('login')->withSuccess(
            'Opps! You have entered invalid credentials'
        );
    }

    public function registerSubmit(Request $request)
    {
        // $request->validate([
        //     'Reg_Name' => 'required',
        //     'Reg_Phone' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'Reg_Pass' => 'required|min:8',
        // ]);

        $data = $request->all();
        // $data = [
        //     [
        //         'name' => $request->Reg_Name,
        //         'user_phoneNumber' => $request->Reg_Name,
        //         'email' => $request->Reg_Email,
        //         'password' => $request->Reg_Pass,
        //     ],
        // ];
        $createUser = $this->create($data);

        $token = Str::random(64);

        UserVerify::create([
            'user_id' => $createUser->id,
            'token' => $token,
        ]);

        Mail::send(
            'emails.emailVerificationEmail',
            ['token' => $token],
            function ($message) use ($request) {
                $message->to($request->Reg_Email);
                $message->subject('Email Verification Mail');
            }
        );

        return redirect('/Authorized/User-Dashboard')->withSuccess(
            'Great! You have Successfully loggedin'
        );
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['Reg_Name'],
            'user_phoneNumber' => $data['Reg_Phone'],
            'email' => $data['Reg_Email'],
            'password' => Hash::make($data['Reg_Pass']),
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();

        $message = 'Sorry your email cannot be identified.';

        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;

            if (!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = 'Your e-mail is verified. You can now login.';
            } else {
                $message =
                    'Your e-mail is already verified. You can now login.';
            }
        }

        return redirect()
            ->route('login')
            ->with('message', $message);
    }
}

//  $request->validate([
//         'name' => 'required|string|max:255',
//         'address' => 'required|string|max:500',
//         'irdNum' => 'required|string|max:12',
//         'phone' => 'required|string|max:16',
//         'email' => 'required|string|email|max:255|unique:users',
//         'password' => ['required', 'confirmed', Rules\Password::defaults()],
//     ]);