<?php

namespace ZMT\Theme\Config;

class globals extends \ZMT\Theme\Templates\_globals {

  function __construct(){

    parent::__construct();

    //nothing to do so far here, because this is the default theme color from default_config
    $this->colors  = new \ZMT\Theme\Config\Modules\configCssVars('colors');
    $this->navbar  = new \ZMT\Theme\Config\Modules\configCssVars('navbar');

  }

}
