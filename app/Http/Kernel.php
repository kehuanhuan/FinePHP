<?php

namespace App\Http;

use Kehuanhuan\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{

    protected function setRouter()
    {
        require __DIR__.'/../../routes/web.php';
    }
}
