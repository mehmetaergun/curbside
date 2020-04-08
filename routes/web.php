<?php

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
    return view('landing');
});

Route::get('trigger-error', function () {
    throw new \Exception('Test exception');
});

Route::post('subscribe', 'SubscriberController');
Route::post('webhook', 'TwilioWebhookController');
