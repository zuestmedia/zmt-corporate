<?php

namespace ZMT\Theme\Config\Modules;

class configNavSearch extends \ZMT\Theme\DefaultConfig\configNavSearch {

    protected function navbar_search_visible_desktop() {

      parent::navbar();

      $this->args['module_class_visibility'] = array('zm-hidden-mobile', 'zm-hidden-tablet');

    }

}
