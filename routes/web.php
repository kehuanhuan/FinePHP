<?php

use Kehuanhuan\Support\Facades\Route;

Route::get('/hello/he', function () {
    echo 'hello world! /je';
});

Route::get('/', 'App\Http\Controller\IndexController@index');

Route::get('/hello', function () {
    echo 'hello world!';
});