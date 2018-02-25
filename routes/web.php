<?php

use Kehuanhuan\Support\Facades\Route;

Route::get('/hello/he', function () {
    echo 'hello world! /je';
});

Route::get('/', function () {
    echo 'hello world!';
});

Route::get('/hello', function () {
    echo 'hello world!';
});