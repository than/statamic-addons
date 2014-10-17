<?php

class Hooks_publish_date_on_bottom extends Hooks
{
  public function control_panel__add_to_head()
  {

      if (URL::getCurrent(false) == '/publish') {

        $js = '<script>$(document).ready(function(){$(".input-block.date").insertAfter($(".input-block").last());});</script>';

        return $js;

      }

  }

}
