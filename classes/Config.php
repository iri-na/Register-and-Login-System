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
                    echo 'path not found';
                    return false;
                }
            }
            return $config;
        }
        else {
            return false;
        }
    }
}