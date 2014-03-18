<?php
/**
 * Modifier_nbsp
 * Replace spaces with non-breaking spaces
 * Usage: {{ variable|nbsp }}
 *
 * @author  Than Tibbetts
 */
class Modifier_nbsp extends Modifier
{
    public function index($value, $parameters=array()) {
        $value = str_replace(" ", "&nbsp;", $value);
        return $value;
    }
}
