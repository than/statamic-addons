<?php
/**
 * Displays the current date.
 * Modified to allow addition and subtraction. 
 */
class Plugin_current_date extends Plugin
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