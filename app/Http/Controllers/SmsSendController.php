<?php

namespace App\Http\Controllers;

use App\Jobs\SendSmsJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SmsSendController extends Controller
{

    private $options = [];

    public function sendSMS(Request $request)
    {
        Validator::make($request->all(), [
            'phoneNumber' => 'required|max:11',
            'body' => 'required|string|max:255',
        ]);

        $this->options['receptor'] = $request->input("phoneNumber");
        $this->options['message'] = $request->input("body");
        $this->options['sender'] = env("SENDER_NUMBER");

        return dispatch(new SendSmsJob($this->options));
    }
}
