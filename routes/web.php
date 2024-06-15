<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Selamat Datang');
});


Route::get('tes', 'TesController@index');
Route::get('tes2', 'TesController@dbjada');




