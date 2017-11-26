<?php


require __DIR__.'/../vendor/autoload.php';


// $app = require __DIR__.'/../bootstrap/app.php';

use \Khh\Route;

Route::get('/', function () {
    echo 'hello world';
});




