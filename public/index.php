<?php

/**
 * FinePHP - A PHP Framework For Web Artisans
 *
 * @package  FinePHP
 * @author   Taylor Otwell <1152018701@qq.com>
 */


require __DIR__.'/../bootstrap/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kehuanhuan\Contracts\Http\Kernel::class);

$kernel->handle(
    new  Kehuanhuan\Http\Request()
);











