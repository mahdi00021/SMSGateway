<?php

namespace App\Features;


use App\Report;
use Illuminate\Support\Facades\Cache;

class ReportSmsAll
{

    public function getAllSMS()
    {

        $messages = Cache::remember('messages', 300, function () {
            return Report::all();
        });

        return $messages;
    }

}