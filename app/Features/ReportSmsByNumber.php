<?php
/**
 * Created by PhpStorm.
 * User: MAHDI
 * Date: 05/01/2022
 * Time: 21:20
 */

namespace App\Features;


use App\Report;

class ReportSmsByNumber
{

    public function getSMSByPhoneNumber($PhoneNumber)
    {
        $messages = Report::where('to_phoneNumber', $PhoneNumber)->get();
        return $messages;
    }
}