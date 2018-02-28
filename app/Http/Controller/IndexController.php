<?php
namespace App\Http\Controller;

use Philo\Blade\Blade;

class IndexController
{
    public function index()
    {
        $this->display();
    }

    public function display()
    {
        $views = $_SERVER['DOCUMENT_ROOT'] . "/../resources/views";
        $cache = $_SERVER['DOCUMENT_ROOT'] . "/../storage/framework/views";

        $blade = new Blade($views, $cache);
        echo $blade->view()->make('welcome')->render();
    }
}
