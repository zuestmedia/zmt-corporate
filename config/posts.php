<?php

namespace ZMT\Theme\Config;

class posts extends \ZMT\Theme\Templates\_posts {

  function __construct(){

    parent::__construct();

      //overwrite default readmore with button!
      $this->readmore  = new \ZMT\Theme\Config\Modules\configReadMore( 'button', 0,'articlecontainer', false );

  }

}
