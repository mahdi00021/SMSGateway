<?php
/**
 * Created by PhpStorm.
 * User: MAHDI
 * Date: 05/01/2022
 * Time: 19:06
 */

namespace App\Helpers;


use App\Report;

abstract class SendRequest
{


    public function send($options)
    {

        $output = null;
        try {

            $url = $this->getUrlApi();
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $headers = array(
                "Content-Type: application/x-www-form-urlencoded",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            $dataPost = $this->makePostQuery($options);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $dataPost);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $output = curl_exec($curl);

            if ($this->isSent($output)) {

                $sms = new Report();
                $sms->body = $options['message'];
                $sms->phone_number = $options['receptor'];
                $sms->status = 'sent';
                $sms->name_api = $this->getSenderApi();
                $sms->error = 'false';
                $sms->save();

            } else {
                $sms = new Report();
                $sms->body = $options['message'];
                $sms->phone_number = $options['receptor'];
                $sms->status = 'fail';
                $sms->name_api = $this->getSenderApi();
                $sms->error = 'true';
                $sms->save();
            }

            curl_close($curl);

        } catch (\Exception $exception) {

            echo $exception->getMessage();
        }

        return $output;
    }

    public function getUrlApi()
    {
        return env("URL_API");
    }

    function makePostQuery($query)
    {
        $query_array = [];
        foreach ($query as $key => $key_value) {

            $query_array[] = urlencode($key) . '=' . urlencode($key_value);

        }
        return implode('&', $query_array);
    }

    public function isSent($output)
    {
        if (str_contains($output, 'success')) {
            return true;
        } else {
            return false;
        }
    }

    public function getSenderApi()
    {
        return env("SENDER_API");
    }

    public function getSenderNumber()
    {
        return env("SENDER_NUMBER");
    }

}