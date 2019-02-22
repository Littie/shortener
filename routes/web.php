<?php

Route::get('/', [
    'as'   => 'index',
    'uses' => 'LinkController@index',
]);

Route::post('store', [
    'as'   => 'store',
    'uses' => 'LinkController@store',
]);

Route::get('{link}', [
    'as'   => 'redirect',
    'uses' => 'LinkController@redirect',
]);
