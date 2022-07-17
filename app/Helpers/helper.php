<?php

use Illuminate\Support\Facades\DB;

/**
 * return the record(s) which contains the most viewed column
 *
 * @param  $limit
 * @return $query
 */
function maxViews($limit)
{
    $query = DB::select("SELECT *, MAX(`view`) OVER(PARTITION BY `view`) AS 'max view'
        FROM `music` WHERE `view` > 70 ORDER BY `max view` DESC LIMIT $limit");
    return $query;
}
