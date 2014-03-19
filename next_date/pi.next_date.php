<?php
/**
 * Given the name of a day, plugin returns the next date of the supplied day 
 * Usage: {{ next_date day='{day}' }}
 * Usage: {{ next_date day='{day}' format="F jS" }}
 *
 * @author  Than Tibbetts
 */
class Plugin_next_date extends Plugin
{
    public function index()
    {
        $format = $this->fetchParam('format', 'Y-m-d', null, FALSE, FALSE);
        $day = $this->fetchParam('day', '', null, FALSE, FALSE);
        
        $next = date_create();
                    
        $next = date_format(date_timestamp_set($next, strtotime("next $day")), $format);
                        
        return $next;
        
    }

}
