<?php

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

use Modules\CoreHelper\Http\Controllers\DateController;
use Modules\CoreHelper\Http\Controllers\MoneyController;

Route::get('/', function () {


    //$date = DateController::date_to_mysql('17/08/2017');
    $money = MoneyController::money_to_br('350.45');

    dd($money);

    return view('welcome');
});
