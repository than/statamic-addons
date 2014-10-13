<?php
/**
 * Modifier_fancyamps
 * Fancy ampersands 
 * Usage: {{ variable|fancyamps }}
 * See: http://simplebits.com/notebook/2008/08/14/ampersands-2/
 *
 * Add the following CSS to your theme's CSS file:
 * .fancyamp {color:inherit;font-size:inherit;font-family:Baskerville,Palatino,"Palatino Linotype","Book Antiqua", "Constantia",serif;font-style:italic;}
 *
 * @author  Than Tibbetts
 */
class Modifier_fancyamps extends Modifier
{
    public function index($value, $parameters=array()) {
        $value = str_replace(" & ", " <span class='fancyamp'>&amp;</span> ", $value);
        return $value;
    }
}
