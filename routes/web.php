<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login','App\Http\Controllers\LoginController@index');
Route::get('/computer','App\Http\Controllers\ComputerController@index');