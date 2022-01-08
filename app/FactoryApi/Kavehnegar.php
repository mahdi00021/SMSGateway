<?php
/**
 * Created by PhpStorm.
 * User: MAHDI
 * Date: 05/01/2022
 * Time: 19:50
 */

namespace App\FactoryApi;


use App\FactoryApi\Interfaces\ISmsSender;
use App\Helpers\SendRequest;

class Kavehnegar extends SendRequest implements ISmsSender
{

    public function sendSMS(array $options)
    {
        $this->send($options);
    }

}