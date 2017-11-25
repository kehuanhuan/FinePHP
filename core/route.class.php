<?php
namespace core;

class route {


    public $ctrl ;
    public $action ;

    public function __construct()
    {
        $argc = $_SERVER['argc'];
        $argv = $_SERVER['argv'];

        $this->ctrl   = $argv[1].'Controller';
        $this->action = $argv[2];
    }
}