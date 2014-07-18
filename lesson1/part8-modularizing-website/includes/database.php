<?php

/**
 * DO NOT USE THIS ON REAL SITES! INSECURE!!!! Find a more secure method!
 */
function db_select($fields, $table, $where, $limit) {
    $sql = sprintf('SELECT %s FROM %s WHERE %s LIMIT %s', $fields, $table, $where, $limit);
    if (!mysql_connect(DB_HOST, DB_USER, DB_PASS))  {
        return null;
    }
    if (!mysql_select_db(DB_NAME)) {
        mysql_close();
        return null;
    }

    $rows = array();
    $result = mysql_query($sql);
    if (!$result) { return array(); }

    while ($row = mysql_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

