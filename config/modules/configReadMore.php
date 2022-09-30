<?php

namespace ZMT\Theme\Config\Modules;

class configReadMore extends \ZMT\Theme\DefaultConfig\configReadMore {

    protected function button() {

      parent::default();

      $this->args['link_class'] = array('uk-button uk-button-default', 'uk-button-small');

    }

}
