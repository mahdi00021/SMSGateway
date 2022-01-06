<?php
/**
 * Created by PhpStorm.
 * User: MAHDI
 * Date: 05/01/2022
 * Time: 18:44
 */

namespace App\FactoryApi;


use App\Exceptions\MainException;

class CreateApiFactory
{

    /**
     * @param array $options
     * @throws MainException
     */
    public function createApi(array $options)
    {

        $className = $this->getSenderApiName();
        if (class_exists($className)) {
            $instance = new $className;
            $instance->sendSMS($options);
        } else {
            throw new MainException("Class Not Found ! ");
        }

    }


    public function getSenderApiName()
    {
        return env('SENDER_API');
    }
}