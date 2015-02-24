<?php
class Hooks_homescreen_icon extends Hooks {
  public function control_panel__add_to_head() {
    if (URL::getCurrent(false) == '/pages') {
      return '<link rel="apple-touch-icon" href="/_add-ons/homescreen_icon/img/apple-touch-icon.png">';
    }
  }
}