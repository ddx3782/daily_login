<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Mail;

class GuestController extends Controller
{
    //
    public function showLogin()
    {
        return view('login');
    }
    public function showRegister()
    {
        return view('register');
    }
    public function doRegister(Request $request)
    {
        $rules = ['firstname' => 'required',
        'middlename' => 'required',
        'lastname' => 'required',
        'phone_number' => 'required|unique:users',
        'email' => 'required|unique:users',
        'password' => 'required',
        'confirm_password' => 'required|same:password',
        'r_btn' => 'required'];
        $validator = Validator::make($request->all() , $rules);
        if ($validator->fails()) {
            // code...
            return back()->withErrors($validator);
        }
        else
        {

            $user_data = $request->all();
            $user_data['status'] = 0;
            $user_data['password'] = bcrypt($request->password);
            User::create($user_data);
            $request->session()->flash('success' , 'You have registered successfuly');


            if ($request->r_btn = 'email') {
            // code...
                // phone number ung ginamit para makuha ung collumn ng kakapasok lang na data
                $user_phone_number = User::where('phone_number' , $request->phone_number)->first();
                $user_email = $user_phone_number->email;
// send ng email
                Mail::send('email.message', ['user' => $user_phone_number], function ($message) use ($user_email)
                {
                    $message->to($user_email);
                    $message->from('daily_login@test.com');
                    $message->subject('email verification');
                });

                    return redirect('goto_email');
            }
        }
    }
}
