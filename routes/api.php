<?php

use App\Http\Middleware\CheckAuthedOrNo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'AuthApiController@register');

Route::middleware([CheckAuthedOrNo::class])->group(function () {


    Route::post('send-sms', 'SmsSendController@sendSMS');
    Route::get('report-all-sms', 'ReportSmsController@getAllSMS')->name("reportAllSMS");
    Route::post('report-sms-by-number', 'ReportSmsController@getSMSByNumber');
});

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {

    Route::post('login', ['as' => 'login', 'uses' => 'AuthApiController@login']);
    Route::post('logout', 'AuthApiController@logout');
    Route::post('refresh', 'AuthApiController@refresh');

});


