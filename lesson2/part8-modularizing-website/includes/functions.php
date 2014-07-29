<?php
/**
 * This file contains all my global-scope functions
 */

function get_page_by_slug($slug) {
    $rows = db_select('*', 'pages', sprintf("slug = '%s'", mysql_real_escape_string($slug)), "0,1" );
    if (empty($rows)) return array();
    return array_shift($rows);
}
function get_page_by_id($id) {
    $rows = db_select('*', 'pages', sprintf("page_id= '%s'", mysql_real_escape_string($id)), "0,1");
    if (empty($rows)) return array();
    return array_shift($rows);
}

function get_all_pages() {
    return db_select('*','pages','1','0,999');
}

