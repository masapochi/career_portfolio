<?php

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@message')->name('message');
