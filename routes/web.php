<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/select-option', 'OptionController@selectOption');

