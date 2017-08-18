<?php

Route::group(['middleware' => 'web', 'prefix' => 'corehelper', 'namespace' => 'Modules\CoreHelper\Http\Controllers'], function()
{
    Route::get('/', 'CoreHelperController@index');
});
