<?php

class Hooks_hide_order extends Hooks
{
	public function control_panel__add_to_head()
	{

      if (URL::getCurrent(false) == '/publish') {

		    $css = '<style type="text/css">#publish-order-number{display:none}</style>';

		    return $css;

      }

	}

}
