<?php

namespace ZMT\Theme\Config;

class posts extends \ZMT\Theme\Templates\_posts {

  function __construct(){

    parent::__construct();

      unset($this->readmore);
      $this->readmore__1  = new \ZMT\Theme\Config\Modules\configReadMore( 'button', 0,'articlecontainer' );

  }

}
