<?php
/**
 * Created by PhpStorm.
 * User: MAHDI
 * Date: 06/01/2022
 * Time: 15:27
 */

namespace App\FactoryApi;


use App\FactoryApi\Interfaces\ISmsSender;
use App\Helpers\SendRequest;

class Ghasedak extends SendRequest implements ISmsSender
{
    public function sendSMS(array $options)
    {
        $this->send($options);
    }
}