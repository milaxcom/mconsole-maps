<?php

/**
 * Maps module routes file
 */
Route::group([
    'prefix' => 'mconsole',
    'middleware' => ['web', 'mconsole'],
    'namespace' => 'Milax\Mconsole\Maps\Http\Controllers',
], function () {
    
    Route::resource('maps', 'MapsController');
    Route::resource('maps/{id}/places', 'PlacesController');

});
