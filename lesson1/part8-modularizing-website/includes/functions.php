<?php
/**
 * This file contains all my global-scope functions
 */

function get_page_by_slug($slug) {
    return array_shift(db_select('*', 'pages', sprintf("slug = '%s'", mysql_real_escape_string($slug)), "0,1" ));
}
function get_page_by_id($id) {
    return array_shift(db_select('*', 'pages', sprintf("page_id= '%s'", mysql_real_escape_string($id)), "0,1"));
}

function get_all_pages() {
    return db_select('*','pages','1','0,999');
}

