<?php

class Hooks_hide_publish_date extends Hooks
{
	public function control_panel__add_to_head()
	{

      if (URL::getCurrent(false) == '/publish') {

		    $css = '<style type="text/css">.input-block.date{display:none}</style>';

		    return $css;

      }

	}

}
