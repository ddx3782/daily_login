<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;

class UserController extends Controller
{

    public function showHome()
    {
        return view('home');
    }
    public function Goto_Email()
    {
        return view('goto_email');
    }
    //
    public function doLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->phone_email , 'password' => $request->password])) {
            // code...
            return redirect('home');
        }
        if (Auth::attempt(['phone_number' => $request->phone_email , 'password' => $request->password])) {
            // code...
            return redirect('home');
        }
        else
        {
            $rules = ['phone_email' => 'required|same:users',
                        'password' => 'required|same:users'];
            $validator = Validator::make($request->all() , $rules);
            $validator->fails();
            return back()->withErrors($validator);
        }
    }
    public function doEmailVerification($user_id)
    {
        $user_data = User::find($user_id);

        $user_data->status = 1;
        $user_data->email_verified_at = date('Y-m-d');
        $user_data->save();
        $request->session()->flash('success' , 'Email verification successful! Please login to continue');
        return redirect('login');
    }
}
