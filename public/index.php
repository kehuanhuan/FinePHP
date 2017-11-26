<?php


require __DIR__.'/../vendor/autoload.php';


// $app = require __DIR__.'/../bootstrap/app.php';

use Kehuanhuan\Route;


Route::get('/', function () {
    echo 'hello world';
});

Route::get('/hello', function () {
    echo 'hello world';
});

Route::dispatch();




