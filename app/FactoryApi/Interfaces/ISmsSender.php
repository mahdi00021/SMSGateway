<?php
/**
 * Created by PhpStorm.
 * User: MAHDI
 * Date: 08/01/2022
 * Time: 17:52
 */

namespace App\FactoryApi\Interfaces;


interface ISmsSender
{
    public function sendSMS(array $options);
}