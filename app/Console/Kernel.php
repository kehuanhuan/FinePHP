<?php

namespace App\Console;

use Kehuanhuan\Foundation\Console\Kernel as ConsoleKernel;


class Kernel extends ConsoleKernel
{

    protected function commands()
    {
        require __DIR__.'/../../routes/console.php';
    }
}
