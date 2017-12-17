<?php

use Kehuanhuan\Support\Facades\Route;

Route::get('/hello/he', function () {
    echo 'hello world!';
});

Route::get('/', function () {
    echo 'hello world!';
});

Route::get('/hell', function () {
    echo 'hello world!';
});