<?php

// Make sure our server is displaying any errors, warnings and notices.
error_reporting(E_ALL);
ini_set('display_errors', 1);



/** spl_autoload_register saves us from having to type in class names every single time.  */
spl_autoload_register(function ($class) {
    require_once('classes/' . $class . '.class.php');
});

