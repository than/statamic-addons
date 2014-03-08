<?php
/**
 * Modifier_substr
 * Substring variable modifier 
 * Usage: {{ variable|substr:3 }} or {{ variable|substr:3:-4 }}
 *
 * @author  Than Tibbetts
 */
class Modifier_substr extends Modifier
{
    public function index($value, $parameters=array()) {
        if ( isset($parameters[1]) ) {
            return substr($value, $parameters[0], $parameters[1]);           
        } elseif ( isset($parameters[0]) ) {
            return substr($value, $parameters[0]);           
        } else {
            return $value;
        }
    }
}
