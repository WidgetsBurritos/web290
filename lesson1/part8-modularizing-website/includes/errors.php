<?php
/**
 * If I want to handle errors I do it in a separate error handler file.
 * I can do anything I want with the errors: log them to a file or database,
 * send them in an email, ignore them.  It really depends on what our goal is.
 *
 * In the case of this example the point is to merely show the possibilities.
 */



function custom_error_handler($e_num, $e_message, $e_file, $e_line, $e_vars) {
    // TODO: Write some sort of error handler
}

// TODO: Activate this once error handler is complete
//set_error_handler('custom_error_handler');