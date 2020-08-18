<?php

class Config {
    public static function get($path = null) {
        if($path) {
            $config = $GLOBALS['config'];
            $path = explode('/', $path);

            foreach($path as $bit) { // $path is an array
                if(isset($config[$bit])) {
                    $config = $config[$bit];
                }
                else {
                    return false;
                }
            }
            return $config; //returns value of config in this case '127.0.0.1'
        }
        else {
            return false;
        }
    }
}