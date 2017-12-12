<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kehuanhuan\Contracts\Http\Kernel::class);

use Kehuanhuan\Routing\Router;

Router::get('/hello', function () {
    echo 'hello world!';
});
Router::get('/hell', function () {
    echo 'hello world!';
});

$kernel->handle(
    new  Kehuanhuan\Http\Request()
);











