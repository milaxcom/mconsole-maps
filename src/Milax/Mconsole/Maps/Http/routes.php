<?php

/**
 * Maps module routes file
 */
Route::group([
    'prefix' => 'mconsole',
    'middleware' => ['web', 'mconsole'],
    'namespace' => 'App\Mconsole\Maps\Http\Controllers',
], function () {
    
    Route::resource('maps', 'MapsController');

});
