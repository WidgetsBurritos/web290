<?php
    $pages = get_all_pages();
    if (empty($pages)) return;
    print "<nav><ul>\n";
    foreach ($pages as $my_page) {
        if (SEO_FRIENDLY_URLS) {
            printf('<li><a href="%s/%s/">%s</a>', URL_BASE, $my_page['slug'], $my_page['page_title']);
        } else if (SLUGS_INSTEAD_OF_IDS) {
            printf('<li><a href="%s/index.php?slug=%s">%s</a>', URL_BASE, $my_page['slug'], $my_page['page_title']);
        } else {
            printf('<li><a href="%s/index.php?id=%d">%s</a>', URL_BASE, $my_page['page_id'], $my_page['page_title']);
        }
    }
    print "</ul></nav>\n";

