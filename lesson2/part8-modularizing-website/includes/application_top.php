<?php
require_once("config.php");
require_once("database.php");
require_once("functions.php");
require_once("errors.php");


if (isset($_GET['slug'])) {
    $page = get_page_by_slug($_GET['slug']);
} else if (isset($_GET['id'])) {
    $page = get_page_by_id(intval($_GET['id']));
} else {
    $page = get_page_by_slug('home');
}



