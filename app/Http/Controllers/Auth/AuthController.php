<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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
        $validator = Validator::make($request->all(), [
            'Log_Email' => 'required|email',
            'Log_Pass' => 'required|min:6|max:12',
        ]);

        if ($validator->fails()) {
            return back()->with('User_Not_Login', 'User Validation Error!');
        }

        // $credentials = array('email' => $request->Log_Email, 'password' => $request->Log_Password);

        if (!Auth::attempt(array('email' => $request->Log_Email, 'password' => $request->Log_Pass))) {
            return back()->with('User_Not_Login', 'User Not Login Successfully!');
        }

        $user = User::where('email', $request->Log_Email)->first();
        if ($user) {
            if (Hash::check($request->Log_Pass, $user->password)) {
                $token = $user->createToken('LoginToken')->accessToken;
                
                if (Auth::user()->utype == 'ADM') {
                    return redirect()->route('Admin.Dashboard');
                } else {
                    return redirect()->route('User.Dashboard');
                }

            // return back()->with('User_Login', 'User Login Successfully!');
            } else {
                return back()->with('User_Login', 'Password mismatch');
            }
        } else {
            return back()->with('User_Login', 'User does not exist');
        }
    }

    public function registerSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Reg_Email' => 'required|email',
            'Reg_Name' => 'required',
            'Reg_Phone' => 'required',
            'Reg_Pass' => 'required|min:6|max:12',
            'Reg_CPass' => 'required|same:Reg_Pass|min:6|max:12',
        ]);

        if ($validator->fails()) {
            return back()->with('User_Not_Registerd', 'User Not Registerd Successfully!');
        }

        $user = new User();
        $user->email = $request->Reg_Email;
        $user->name = $request->Reg_Name;
        $user->user_phoneNumber = $request->Reg_Phone;
        $user->password = bcrypt($request->Reg_Pass);
        $user->save();

        return back()->with('User_Registerd', 'User Registerd Successfully!');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/Authentication/LoginForm');
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
