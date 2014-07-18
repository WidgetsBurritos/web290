<?php
require("config.php");
require("database.php");
require("functions.php");
require("errors.php");

$page = array();

if (isset($_GET['slug'])) {
    $page = get_page_by_slug($_GET['slug']);
} else if (isset($_GET['id'])) {
    $page = get_page_by_id(intval($_GET['id']));
} else {
    $page = get_page_by_slug('home');
}

