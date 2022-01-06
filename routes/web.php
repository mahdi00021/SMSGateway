<?php

use App\Http\Middleware\AuthUi;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([AuthUi::class])->group(function () {

    Route::get('report', 'ReportSmsController@getAllSMSView')->name("report");
    Route::post('report', 'ReportSmsController@getSMSByNumberView');
});

Route::get('login', array('uses' => 'AuthUiController@showLogin'))->name('login');
Route::post('login', array('uses' => 'AuthUiController@doLogin'));
Route::get('logout', array('uses' => 'AuthUiController@doLogout'));

