<?php
namespace App\Http\Controllers;

use Philo\Blade\Blade;

class IndexController extends Controller
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
