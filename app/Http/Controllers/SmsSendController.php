<?php

namespace App\Http\Controllers;

use App\Jobs\SendSmsJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SmsSendController extends Controller
{

    public function sendSMS(Request $request)
    {
        Validator::make($request->all(), [
            'phoneNumber' => 'required|max:11',
            'body' => 'required|string|max:255',
        ]);

        $options['receptor'] = $request->input("phoneNumber");
        $options['message'] = $request->input("body");
        $options['sender'] = env("SENDER_NUMBER");

        dispatch(new SendSmsJob($options));
    }
}
