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

      $this->args['color_background_body'] = '#ffffff';

      $this->args['color_background_default'] = '#fcfcfa';
      $this->args['color_background_gradient_default'] = '#fcfcfa';

      $this->args['color_background_muted'] = '#f8f8f8';
      $this->args['color_background_gradient_muted'] = '#f8f8f8';

      $this->args['color_background_primary'] = '#075c97';
      $this->args['color_background_gradient_primary'] = '#075c97';

      $this->args['color_background_secondary'] = '#253946';
      $this->args['color_background_gradient_secondary'] = '#253946';

      $this->args['color_text_emphasis'] = '#222222';
      $this->args['color_text_default'] = '#444444';
      $this->args['color_text_muted'] = '#666666';
      $this->args['color_text_inverse'] = '#ffffff';

      $this->args['color_text_link'] = '#3a5199';
      $this->args['color_text_link_hover'] = '#294086';

      $this->args['color_border'] = '#e5e5e5';

      $this->args['logo_color'] = '#222222';
      $this->args['logo_color_hover'] = '#222222';

      $this->args['navbar_item_color'] = '#666666';//global-muted-color
      $this->args['navbar_item_color_hover'] = '#444444';//global-color
      $this->args['navbar_item_color_active_onclick'] = '#222222';//global-emphasis-color

      $this->args['navbar_dropdown_background'] = '#ffffff';

    }

    //same as in ZM Pro Presets!!! if change here, also there!
    protected function colors_light() {
      $this->colors();
    }
    protected function colors_dark() {
      $this->colors();

      $this->args['color_background_body'] = '#222222';

      $this->args['color_background_default'] = '#444444';
      $this->args['color_background_gradient_default'] = '#444444';

      $this->args['color_background_muted'] = '#666666';
      $this->args['color_background_gradient_muted'] = '#666666';

      $this->args['color_text_emphasis'] = '#ffffff';
      $this->args['color_text_default'] = '#eeedef';
      $this->args['color_text_muted'] = '#e3e3e3';
      $this->args['color_text_inverse'] = '#ffffff';

      $this->args['color_text_link'] = '#eeedef';
      $this->args['color_text_link_hover'] = '#ffffff';

      $this->args['color_border'] = '#999999';

      $this->args['logo_color'] = '#ffffff';//global-emphasis-color
      $this->args['logo_color_hover'] = '#ffffff';//global-emphasis-color

      $this->args['navbar_item_color'] = '#e3e3e3';//global-muted-color
      $this->args['navbar_item_color_hover'] = '#eeedef';//global-color
      $this->args['navbar_item_color_active_onclick'] = '#ffffff';//global-emphasis-color

      $this->args['navbar_dropdown_background'] = '#222222';

    }

    
    protected function navbar() {
      parent::navbar();
      $this->args['navbar_padding'] = '15px';
    }

    //if adding head, body, logo or navbar settings, must add corresponding function to config/globals.php!!!


}
