<?php

namespace App\Http\Controllers;

use App\Features\ReportSmsAll;
use App\Features\ReportSmsByNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportSmsController extends Controller
{

    /**
     * This method is for API EndPoint
     * @param ReportSmsAll $sms
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     *
     * return json
     */
    public function getAllSMS(ReportSmsAll $sms)
    {
        $messages = $sms->getAllSMS();
        return $messages;
    }

    /**
     * This method is for API EndPoint
     * @param $request
     * @param ReportSmsByNumber $sms
     * @return mixed
     *
     * return json
     */
    public function getSMSByNumber(Request $request, ReportSmsByNumber $sms)
    {
        Validator::make($request->all(), [
            'phoneNumber' => 'required|max:11',
        ]);

        $messages = $sms->getSMSByPhoneNumber($request->input("phoneNumber"));
        return $messages;
    }


    /**
     *  This method is for View blade - pass to view
     *
     * @param ReportSmsAll $sms
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAllSMSView(ReportSmsAll $sms)
    {
        $messages = $sms->getAllSMS();
        return view('Messages', compact('messages'));
    }


    /**
     * This method is for View blade - pass to view
     *
     * @param $request
     * @param ReportSmsByNumber $sms
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getSMSByNumberView(Request $request, ReportSmsByNumber $sms)
    {
        Validator::make($request->all(), [
            'phoneNumber' => 'required|max:11',
        ]);

        $messages = $sms->getSMSByPhoneNumber($request->input("phoneNumber"));
        return view('Messages', compact('messages'));
    }
}
