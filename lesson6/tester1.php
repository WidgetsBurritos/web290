<?php
include_once("_top.php");

function custom_error_handler($error_number, $error_string, $error_file, $error_line) {
    static $ct = 0;
    $colors = array('#cc0000','#00aa00','#0000cc','#cc00cc');
    printf('<div style="color: %s; margin-bottom: 10px;">%d - %s</div>', $colors[$ct], $error_number, $error_string);
    $ct++;
    $ct %= sizeof($colors);

    Logger::getInstance()->log($error_number, $error_string, $error_file, $error_line);
}

// Use set_error_handler() to tell PHP to use our method
$old_error_handler = set_error_handler("custom_error_handler");


// The following code should trigger 4 errors:

$x /= 0;

$invalid->XYZ = 3;

trigger_error('Custom Error', E_USER_ERROR);

trigger_error('Another Error', E_USER_DEPRECATED);
