<?php

namespace ZMT\Theme\Config\Modules;

class configNavMenu extends \ZMT\Theme\DefaultConfig\configNavMenu {

  protected function navbar_menu_visible_desktop() {

    parent::navbar();

    $this->args['module_class_navbar_item_pos'] = 'uk-navbar-center';

    $this->args['module_class_visibility'] = array('zm-hidden-mobile', 'zm-hidden-tablet');

  }

  protected function navbar_dropdown_nav_hidden_desktop() {

    parent::navbar_dropdown_nav();

    $this->args['module_class_visibility'] = array('zm-hidden-tablet-landscape', 'zm-hidden-desktop');

    $this->args['module_class'] = 'uk-margin-small-left';

  }

}
