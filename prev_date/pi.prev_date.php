<?php
/**
 * Given the name of a day, plugin returns the previous date of the supplied day
 * Usage: {{ prev_date day="{day}" }}
 * Usage: {{ prev_date day="{day}" format="F jS" }}
 *
 * @author  Than Tibbetts
 */
class Plugin_prev_date extends Plugin
{
    public function index()
    {
        $format = $this->fetchParam('format', 'Y-m-d', null, FALSE, FALSE);
        $day = $this->fetchParam('day', '', null, FALSE, FALSE);

        $next = date_create();

        $next = date_format(date_timestamp_set($next, strtotime("previous $day")), $format);

        return $next;

    }

}
