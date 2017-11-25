<?php

function p ($arg){
    if (is_bool($arg)) {
        var_dump($arg);
    } else if(is_null($arg)){
        var_dump(NULL);
    } else {
        echo print_r($arg, true);
    }
    echo "\n";

}