<?php
/**
 * Created by PhpStorm.
 * User: MAHDI
 * Date: 06/01/2022
 * Time: 15:27
 */

namespace App\FactoryApi;


use App\Helpers\SendRequest;

class Ghasedak extends SendRequest
{
    public function sendSMS(array $options)
    {
        $this->send($options);
    }
}