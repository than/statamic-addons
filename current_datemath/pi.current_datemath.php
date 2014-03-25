<?php
/**
 * Displays the current date and allows for date addition and subtraction. 
 * Usage: {{ current_datemath add="3" }} or {{ current_datemath subtract="4" }}
 * Usage: {{ current_datemath plus="3" }} or {{ current_datemath minus="4" }}
 *
 * @author  Than Tibbetts
 */
class Plugin_current_datemath extends Plugin
{
    public function index()
    {
        $format = $this->fetchParam('format', 'Y-m-d', null, FALSE, FALSE);
        
        $add = $this->fetchParam('add', '0', null, FALSE, FALSE) . ' days';
        $subtract = $this->fetchParam('subtract', '0', null, FALSE, FALSE) . ' days';

        $today = new DateTime();
        
        if ( $add != 0 ) {

            date_add($today, date_interval_create_from_date_string($add));
            
        } else {
        
            date_sub($today, date_interval_create_from_date_string($subtract));
        
        }
        
        return date_format($today, $format);
        
    }

}
