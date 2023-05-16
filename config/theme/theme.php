<?php

namespace ZMT\Theme\Config\Theme;

class theme {

  public $displayname;
  public $version;
  public $framework;

  public $css_type;

  public $css;
  public $css_rtl;

  public $js;
  public $icons;
  public $js_array;

  public $head_modules;

  public $menu_active_class;
  public $menu_parent_class;

  function __construct(){

    $this->displayname = __( 'ZMT Corporate', 'zmt-corporate' );

    $this->version = '1.0.15';

    $this->framework = 'zm-uikit';

    $this->css_type = 'default';

    $this->css = '/assets/css/uikit.zmt-corporate.min.css';
    $this->css_rtl = '/assets/css/uikit.zmt-corporate-rtl.min.css';

    $this->js = '/assets/js/uikit.min.js';
    $this->icons = '/assets/js/uikit-icons.min.js';

    $this->js_array = array(
      array(
        'js_slug' => 'zmtheme-js',
        'js_url' => '/assets/js/zmtheme.js',
        'js_deps' => array('jquery','zm-uikit-js','zm-uikit-icons'),
        //'js_ver' => '1.0.0',//get auto version!
        'js_in_footer' => NULL
      )
    );

    $this->head_modules = array(
      'globals__colors',
      'globals__body',
      'globals__heading',
      'globals__navbar',
      'globals__logo'
    );

    $this->menu_active_class = 'uk-active';
    $this->menu_parent_class = 'uk-parent';

  }

}
