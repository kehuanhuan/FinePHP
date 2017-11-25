<?php

namespace core;

class khh {

    public static $classMap = [];

    static public function run()
    {
        spl_autoload_register('core\khh::load');

        $route = new \core\route();

        $file = APP.'/Controller/'.$route->ctrl.'.class.php';

        // p($file);
        if(is_file($file)){

            include $file;
            $ctrlClass = MODULE.'\Controller\\'.$route->ctrl;
            $action = $route->action;

            $c = new $ctrlClass();
            $c->$action();
        }
    }

    static public function load($class)
    {
        if(isset(self::$classMap[$class])){
            return true;
        }else {
            $class = str_replace('\\', '/', $class);
            $file = KHH . '/' . $class .'.class.php';

            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }
    }

}