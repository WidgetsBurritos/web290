<?php

    ini_set('display_errors', '1');


/**
 * Prints out the title as an <h3> tag and recursively prints out the object specified
 *
 * @param $title
 * @param $obj
 */
function __pre_output($title, $obj)
{
    print "<PRE>\n";
    print "<h3 style='margin-bottom: 0px;'>" . $title . "</h3>";
    print "------------------------------------------\n";
    print_r($obj);
    print "------------------------------------------\n\n\n\n\n\n\n";
    print "</PRE>\n";
}

