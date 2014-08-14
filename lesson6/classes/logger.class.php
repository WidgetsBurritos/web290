<?php


class Logger {
    private static $_instance;

    private function __construct() {
    }


    public static function getInstance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }


    public function log($error_number, $error_string, $error_file, $error_line) {


    }


}