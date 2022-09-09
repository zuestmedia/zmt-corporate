<?php

namespace ZMT\Theme\Config\Modules;

class configCssVars extends \ZMT\Theme\DefaultConfig\configCssVars {

  /**
    *
    * the following line has to be added to config/globals.php to work:
    * $this->colors = new \ZMT\Theme\Config\Modules\configCssVars('colors');
    * ----
    * Important! use a child theme if you are NOT creating
    * a new base theme!!! --> and make overwrites there.
    * use namespace/class: "ZMT\Theme\Child\Config\configCssVars"
    * in folder "config/modules" of your child theme
    * ----
    */
    protected function colors() {

      //get original values if not overwriting all
      parent::colors();

    }

    //same as in ZM Pro Presets!!! if change here, also there!
    protected function colors_light() {
      $this->colors();
    }
    protected function colors_dark() {
      $this->colors();

      $this->args['color_background_default'] = '#222222';
      $this->args['color_background_gradient_default'] = '#222222';

      $this->args['color_background_muted'] = '#161616';
      $this->args['color_background_gradient_muted'] = '#161616';

      $this->args['color_text_emphasis'] = '#ffffff';
      $this->args['color_text_default'] = '#eeedef';
      $this->args['color_text_muted'] = '#eeedef';
      $this->args['color_text_inverse'] = '#ffffff';

      $this->args['navbar_dropdown_background'] = '#161616';

    }



}
