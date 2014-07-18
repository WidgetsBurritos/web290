<?php
    $pages = get_all_pages();
    if (empty($pages)) return;
    print "<nav><ul>\n";
    foreach ($pages as $page) {
        if (SEO_FRIENDLY_URLS) {
            printf('<li><a href="%s/%s/">%s</a>', URL_BASE, $page['slug'], $page['page_title']);
        } else if (SLUGS_INSTEAD_OF_IDS) {
            printf('<li><a href="%s/index.php?slug=%s">%s</a>', URL_BASE, $page['slug'], $page['page_title']);
        } else {
            printf('<li><a href="%s/index.php?id=%d">%s</a>', URL_BASE, $page['page_id'], $page['page_title']);
        }
    }
    print "</ul></nav>\n";

?>
