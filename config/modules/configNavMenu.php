<?php

namespace ZMT\Theme\Config\Modules;

class configNavMenu extends \ZMT\Theme\DefaultConfig\configNavMenu {

  protected function navbar_menu_visible_desktop() {

    parent::navbar();

    $this->args['module_class'] = 'zmnavitems uk-overflow-auto uk-margin-left';

    $this->args['module_class_visibility'] = array('zm-hidden-mobile', 'zm-hidden-tablet');

  }

  protected function navbar_dropdown_nav_hidden_desktop() {

    parent::navbar_dropdown_nav();

    $this->args['module_class_visibility'] = array('zm-hidden-tablet-landscape', 'zm-hidden-desktop');

    $this->args['module_class'] = 'zmnavitems uk-margin-small-left';

  }

}
