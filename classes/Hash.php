<?php

class Hash {
    public static function make($string, $salt = '') {
        return hash('sha256', $string . $salt);
    }
    public static function salt($length) {
        try {
            return bin2hex(random_bytes($length));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public static function unique() {
        return self::make(uniqid());
    }
}