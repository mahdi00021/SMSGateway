<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthUiController extends Controller
{

    public function showLogin()
    {

        return view('login');
    }

    public function doLogin(Request $request)
    {


        $rules = array(
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('login');
        } else {


            $userdata = array(
                'email' => $request->input('email'),
                'password' => $request->input('password')
            );


            if (Auth::attempt($userdata)) {

                return Redirect::to('report');

            } else {

                return Redirect::to('login');

            }

        }

    }


    public function doLogout()
    {
        Auth::logout();
        return Redirect::to('login');
    }
}
